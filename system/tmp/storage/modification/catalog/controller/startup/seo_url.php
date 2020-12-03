<?php
class ControllerStartupSeoUrl extends Controller {
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL
		if (isset($this->request->get['_route_'])) {
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");


                // Journal Theme Modification
                if ($part && !$query->num_rows) {
                    $sql = "
                        SELECT CONCAT('journal_blog_category_id=', category_id) as query FROM " . DB_PREFIX . "journal3_blog_category_description
                        WHERE keyword = '" . $this->db->escape($part) . "'
                        UNION
                        SELECT CONCAT('journal_blog_post_id=', post_id) as query FROM " . DB_PREFIX . "journal3_blog_post_description
                        WHERE keyword = '" . $this->db->escape($part) . "'
                    ";
                    $query = $this->db->query($sql);
                }

                if (!$query->num_rows) {
                    $this->load->model('journal3/blog');
                    $journal_blog_keywords = $this->model_journal3_blog->getBlogKeywords();

                    if($part && is_array($journal_blog_keywords) && (in_array($part, $journal_blog_keywords))) {
                        $this->request->get['route'] = 'journal3/blog';
                        continue;
                    }
                }
                // End Journal Theme Modification
            
				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);


                // Journal Theme Modification
                if ($url[0] == 'journal_blog_post_id') {
                    $this->request->get['journal_blog_post_id'] = $url[1];
                }

                if ($url[0] == 'journal_blog_category_id') {
                    $this->request->get['journal_blog_category_id'] = $url[1];
                }
                // End Journal Theme Modification
            
					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}

					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if ($query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id') {
						$this->request->get['route'] = $query->row['query'];
					}

                }elseif($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') AND $this->request->get['_route_']=='Marketplace-Collection'){
                    $this->request->get['route'] =  'customerpartner/profile/collection';
                }elseif ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') AND is_array($this->config->get('marketplace_SefUrlsvalue')) AND (in_array($this->request->get['_route_'],$this->config->get('marketplace_SefUrlsvalue')) || in_array(current(explode('/',$this->request->get['_route_'])),$this->config->get('marketplace_SefUrlsvalue')) )) {
                    $_route_ = explode('/',$this->request->get['_route_']);

                    $sefKey = array_search($_route_[0],$this->config->get('marketplace_SefUrlsvalue'));

                    $wkSefUrlspath = $this->config->get('marketplace_SefUrlspath');

                    if(isset($wkSefUrlspath[$sefKey])) {

                        if($wkSefUrlspath[$sefKey]=='customerpartner/profile' AND isset($_route_[1])) {

                            $query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customerpartner_to_customer WHERE `screenname` = '" . $this->db->escape($_route_[1]) . "'");
                            if ($query->num_rows) {
                                if($query->row['customer_id']){
                                   $this->request->get['id'] = $query->row['customer_id'];
                                }
                            }
                        $this->request->get['route'] = 'customerpartner/profile';

                    } elseif($wkSefUrlspath[$sefKey]=='product/product' && in_array('product/product',$this->config->get('marketplace_SefUrlspath'))) {
                    $new_route = str_replace($this->config->get('marketplace_product_seo_page_ext'),'',$this->request->get['_route_']);
                    $product_name = false;
                    if($this->config->get('marketplace_product_seo_format')) {
                        if($this->config->get('marketplace_product_seo_format')=='1') {
                            $mpparts = explode('/', $new_route);
                            if(isset($mpparts[1]) ) {
                                $product_name = $mpparts[1];
                            }
                        } else if($this->config->get('marketplace_product_seo_format')=='2') {
                           $mpparts = explode($this->config->get('marketplace_product_seo_default_name').'-',$new_route,2);
                             if (!isset($mpparts[1])) {
                              $mpparts = explode('/',$mpparts[0],2);

                              if (isset($mpparts[1])) {
                                $mpparts = explode('-',$mpparts[1],2);
                              }
                             }

                            if(isset($mpparts[1]))
                                $product_name = $mpparts[1];
                        } else if($this->config->get('marketplace_product_seo_format')=='3') {
                            $mpparts = explode('/',$new_route);
                            if($mpparts[1])
                                $product_name = $mpparts[1];
                        }
                    }
                    if ($product_name) {
                        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($product_name) . "'");

                        if ($query->num_rows) {
                            $url = explode('=', $query->row['query']);

                            if ($url[0] == 'product_id') {
                                $this->request->get['product_id'] = $url[1];
                            }
                        }

                        if(!$query->num_rows AND $this->config->get('marketplace_product_seo_product_name')) {
                            $product_name = str_replace('-', ' ', $product_name);
                            $query = $this->db->query("SELECT pd.product_id FROM ".DB_PREFIX."product_description pd WHERE pd.name = '".$this->db->escape($product_name)."' AND pd.language_id = '".$this->config->get('config_language_id')."'");

                            if ($query->num_rows)
                                $this->request->get['product_id'] = $query->row['product_id'];
                        }

                        $this->request->get['route'] = 'product/product';

                    }

                }else{
                    $this->request->get['route'] =  $wkSefUrlspath[$sefKey];
                }

            }
            
				} else {
					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}


                // Journal Theme Modification
                if (isset($this->request->get['journal_blog_post_id'])) {
                    $this->request->get['route'] = 'journal3/blog/post';
                } else if (isset($this->request->get['journal_blog_category_id'])) {
                    $this->request->get['route'] = 'journal3/blog';
                }
                // End Journal Theme Modification
            
			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}
		}
	}

	public function rewrite($link) {

                // Journal Theme Modification
                if (defined('JOURNAL3_ACTIVE')) {
                    $this->load->model('journal3/blog');
                    $is_journal3_blog = false;
                }
                // End Journal Theme Modification
            
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}

                // Journal Theme Modification
                } elseif ($key == 'journal_blog_post_id') {
                    $is_journal3_blog = true;
                    if ($journal_blog_keyword = $this->model_journal3_blog->rewritePost($value)) {
                        $url .= '/' . $journal_blog_keyword;
                        unset($data[$key]);
                    }
                } elseif ($key == 'journal_blog_category_id') {
                    $is_journal3_blog = true;
                    if ($journal_blog_keyword = $this->model_journal3_blog->rewriteCategory($value)) {
                        $url .= '/' . $journal_blog_keyword;
                        unset($data[$key]);
                    }
                } elseif (isset($data['route']) && $data['route'] == 'journal3/blog') {
                    if (!isset($data['journal_blog_post_id']) && !isset($data['journal_blog_category_id'])) {
                        $is_journal3_blog = true;
                    }
                // End Journal Theme Modification
            


                }elseif($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') AND $data['route'] == 'customerpartner/profile/collection'){

                    $url .= '/Marketplace-Collection' ;
                    unset($data[$key]);
                }elseif($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') AND $data['route'] == 'product/product' AND isset($data['product_id']) AND is_array($this->config->get('marketplace_SefUrlspath')) AND in_array($data['route'],$this->config->get('marketplace_SefUrlspath')) ) {
                    $sellerDetail = '';
                    $sellerDetails = $this->db->query("SELECT c2c.screenname,c2c.companyname,c.firstname as sellername FROM ".DB_PREFIX."customerpartner_to_product c2p LEFT JOIN ".DB_PREFIX."product p ON (p.product_id=c2p.product_id) LEFT JOIN ".DB_PREFIX."customerpartner_to_customer c2c ON (c2p.customer_id=c2c.customer_id) LEFT JOIN ".DB_PREFIX."customer c ON (c.customer_id=c2c.customer_id) WHERE c2p.product_id = '".$data['product_id']."' ")->row;

                    if(isset($sellerDetails[$this->config->get('marketplace_product_seo_name')]) && $sellerDetails[$this->config->get('marketplace_product_seo_name')] ) {
                        $sellerDetail = $sellerDetails[$this->config->get('marketplace_product_seo_name')];
                    } else {
                        $sellerDetail = $this->config->get('marketplace_product_seo_default_name');
                    }
                    $keyword = $this->db->query("SELECT keyword FROM ".DB_PREFIX."seo_url WHERE query = 'product_id=" . (int)$data['product_id'] . "' ")->row;

                    if(isset($keyword['keyword']) && $keyword['keyword']) {
                        $keyword = $keyword['keyword'];
                        unset($data['product_id']);
                    } else if($this->config->get('marketplace_product_seo_name')) {

                        $key_word = $this->db->query("SELECT name FROM ".DB_PREFIX."product_description pd WHERE product_id = '".$data['product_id']."' AND language_id = '".$this->config->get('config_language_id')."' ")->row;

                        if(isset($key_word['name'])) {
                            $keyword = str_replace(' ','-',$key_word['name']);
                        } else {
                            $keyword = '';
                        }
                    }
                    $sefKey = array_search($data['route'],$this->config->get('marketplace_SefUrlspath'));
                    $wkSefUrlsvalue = $this->config->get('marketplace_SefUrlsvalue');
                    if(isset($wkSefUrlsvalue[$sefKey]) && $wkSefUrlsvalue[$sefKey]) {
                        $url .= '/'.$wkSefUrlsvalue[$sefKey];
                    } else {
                        $url .= '';
                    }
                    if($sellerDetail) {
                        if($this->config->get('marketplace_product_seo_format') == '1') {
                            $url .= '/'.$keyword;
                        } else if($this->config->get('marketplace_product_seo_format') == '2') {
                            $url .= '/'.str_replace(array(' ', '-'),'_',$sellerDetail).'-'.$keyword;
                        } else if ($this->config->get('marketplace_product_seo_format') == '3') {
                            $url .= '/'.$keyword.'/'.str_replace(' ','-',$sellerDetail);
                        }
                        if($this->config->get('marketplace_product_seo_page_ext')) {
                            $url .= $this->config->get('marketplace_product_seo_page_ext');
                        }
                        unset($data[$key]);
                    } else {

                        $sefKey = array_search($data['route'],$this->config->get('marketplace_SefUrlspath'));
                        $wkSefUrlsvalue = $this->config->get('marketplace_SefUrlsvalue');

                        if(isset($wkSefUrlsvalue[$sefKey])){
                            if($keyword){
                                $url .=  '/'.$keyword;
                            }
                            if($this->config->get('marketplace_product_seo_page_ext')) {
                                $url .= $this->config->get('marketplace_product_seo_page_ext');
                            }
                            unset($data[$key]);
                        }
                    }
                    unset($data['product_id']);
                } elseif ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') AND is_array($this->config->get('marketplace_SefUrlspath')) AND in_array($data['route'],$this->config->get('marketplace_SefUrlspath'))) {
                    $sefKey = array_search($data['route'],$this->config->get('marketplace_SefUrlspath'));

                    $wkSefUrlsvalue = $this->config->get('marketplace_SefUrlsvalue');
                    if(isset($wkSefUrlsvalue[$sefKey])){
                        if($data['route']=='customerpartner/profile'){
                            if($key == 'id'){
                                $url .=  '/'.$wkSefUrlsvalue[$sefKey];

                                $query = $this->db->query("SELECT screenname FROM " . DB_PREFIX . "customerpartner_to_customer WHERE `customer_id` = '" . (int)$data[$key] . "'");
                                if ($query->num_rows) {

                                   if(trim($query->row['screenname'])){
                                      $url .= '/' . $query->row['screenname'];
                                    }else{
                                      $url .= '';
                                    }
                                    unset($data[$key]);
                                }
                            }
                        }elseif(($data['route'] != 'product/product') && ($data['route'] != 'customerpartner/profile')){
                            $url .=  '/'.$wkSefUrlsvalue[$sefKey];
                            unset($data[$key]);
                        }
                    }

            
				} elseif ($key == 'path') {
					$categories = explode('_', $value);

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}
			}
		}


                // Journal Theme Modification
                if (defined('JOURNAL3_ACTIVE')) {
                    if ($is_journal3_blog && $this->model_journal3_blog->getBlogKeyword()) {
                        $url = '/' . $this->model_journal3_blog->getBlogKeyword() . $url;
                    }
                }
                // End Journal Theme Modification
            
		if ($url) {
			unset($data['route']);

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}

			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
