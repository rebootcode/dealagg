<?php
class Naaptol extends Parsing{

	public $_code = 'Naaptol';
	public function getFacebookUrl(){
		return 'http://www.facebook.com/ShopRight';
	}
	public function getAllowedCategory(){
		return array(Category::TABLETS,Category::MOBILE,Category::MOBILE_ACC,Category::BOOKS,Category::COMP_LAPTOP,Category::COMP_COMPUTER);
	}
	public function isTrusted($category){
		return true;
	}

	public function getWebsiteUrl(){
		return 'http://www.naaptol.com';
	}
	/*###note###
	 * I a few sites like this and other the search result is json encoded. But if we remove "&req=ajax"  from the end of the url it gives a html result page.
	 * 
	 */ 
	public function getSearchURL($query,$category = false,$subcat=false){
		if($category == Category::MOBILE){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=27&kw=$query&sb=49,9,8";/* &req=ajax"; */
		}else if($category == Category::BOOKS){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2578&kw=$query&sb=49,9,8";/* &req=ajax"; */
		}else if($category == Category::MOBILE_ACC){
			if($subcat == Category::NOT_SURE){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=4&kw=$query&sb=49,9,8";/* &req=ajax"; */
			}elseif ($subcat == Category::MOB_OTHERS){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2494&kw=$query&sb=49,9,8";
			}elseif($subcat == Category::MOB_SCREEN_GUARD){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=279&kw=$query&sb=49,9,8";
			}elseif ($subcat == Category::MOB_CASES){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=104&kw=$query&sb=49,9,8";
			}elseif ($subcat == Category::MOB_HEADSETS){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=103&kw=$query&sb=49,9,8";
			}elseif($subcat == Category::MOB_BATTERY){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=106&kw=$query&sb=49,9,8";
			}elseif($subcat == Category::MOB_HANDSFREE || $subcat == Category::MOB_HEADPHONE){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=105&kw=$query&sb=49,9,8";
			}elseif($subcat == Category::MOB_CHARGER){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=101&kw=$query&sb=49,9,8";
			}elseif($subcat == Category::MOB_CABLE){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=102&kw=$query&sb=49,9,8";
			}elseif ($subcat == Category::MOB_CAR_ACC){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=186&kw=$query&sb=49,9,8";
			}else{
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&kw=$query&sb=49,9,8";/* &req=ajax"; */
			}
		}else if($category == Category::CAMERA){
			if($subcat == Category::NOT_SURE){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=1&kw=$query&sb=49,9,8&";/* &req=ajax"; */
			}else if($subcat == Category::CAM_DIGITAL_CAMERA){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=6&kw=$query&sb=49,9,8";/* &req=ajax"; */ // digital camera
			}else if($subcat == Category::CAM_DIGITAL_SLR){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=7&kw=$query&sb=49,9,8";/* &req=ajax"; */ //slr
			}else if($subcat == Category::CAM_CAMCORDER){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=9&kw=$query&sb=49,9,8";/* &req=ajax"; */ // camcorders
			}else if($subcat == Category::CAM_MIRRORLESS){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=6&kw=$query&sb=49,9,8";/* &req=ajax"; */ // digital camera
			}else {
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&kw=$query&sb=49,9,8";/* &req=ajax"; */
			}
		}else if($category == Category::CAMERA_ACC){
			if($subcat == Category::NOT_SURE){
			}else if($subcat == Category::CAM_ACC_ADAPTER_CHARGES){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=108&kw=$query&sb=49,9,8";/* &req=ajax"; */ //chargers
			}else if($subcat == Category::CAM_ACC_BAGS){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=38&kw=$query&sb=49,9,8";/* &req=ajax"; */ // camera pouch
			}else if($subcat == Category::CAM_ACC_BATTERY){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=37&kw=$query&sb=49,9,8";/* &req=ajax"; *///battery
			}else if($subcat == Category::CAM_ACC_FLASH_LIGHTS){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=253&kw=$query&sb=49,9,8";/* &req=ajax"; */
			}else if($subcat == Category::CAM_ACC_LENSEFILTER){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2582&kw=$query&sb=49,9,8";/* &req=ajax"; */ //lens
			}else if($subcat == Category::CAM_ACC_LENSES){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=252&kw=$query&sb=49,9,8";/* &req=ajax"; */ //lens
			}else if($subcat == Category::CAM_ACC_MEMORY_AND_STORAGE){
				return '';
			}else if($subcat == Category::CAM_ACC_OTHER_ACC){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2495&kw=$query&sb=49,9,8";/* &req=ajax"; */ //misc
			}else if($subcat == Category::CAM_ACC_SCREEN_PROTECTOR){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2591&kw=$query&sb=49,9,8";/* &req=ajax"; */
			}else if($subcat == Category::CAM_ACC_TRIPODS){
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=39&kw=$query&sb=49,9,8";/* &req=ajax"; */ //tripods
			}else{
				return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&kw=$query&sb=49,9,8";/* &req=ajax"; */
			}
		}elseif ($category == Category::COMP_COMPUTER){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=12&kw=$query&sb=49,9,8";
		}elseif ($category == Category::COMP_LAPTOP){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=13&kw=$query&sb=49,9,8";
		}elseif ($category == Category::TABLETS){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2610&kw=$query&sb=49,9,8"
		}
		return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&kw=$query&sb=49,9,8";/* &req=ajax"; */
	}
	public function getLogo(){
		return "http://images2.naptol.com/usr/local/csp/staticContent/images_layout/naaptolXmasLogo.gif";
	}
	public function getData($html,$query,$category,$subcat){

		$data = array();
		$json = json_decode($html,true);
		if(sizeof($json['prodList']) > 0){
			foreach($json['prodList'] as $row){
				$image = 'http://images2.naptol.com/usr/local/csp/staticContent/NormImg105x105/'.$row['pimg'];
				$url = $this->getWebsiteUrl().$row['purl'];
				$name = $row['pnm'];
				$disc_price = $row['pc'];
				$offer = isset($row['cdEiFs']) ? $row['cdEiFs'] : '';
				$shipping = '';
				$stock = 0;
				$author = '';
				$data[] = array(
						'name'=>$name,
						'image'=>$image,
						'disc_price'=>$disc_price,
						'url'=>$url,
						'website'=>$this->getCode(),
						'offer'=>$offer,
						'shipping'=>$shipping,
						'stock'=>$stock,
						'author' => $author,
						'cat' => ''
				);
			}
		}

		$data = $this->cleanData($data, $query);
		$data = $this->bestMatchData($data, $query,$category,$subcat);
		return $data;
	}
	public function hasProductdata(){
		return true;
	}
	public function getProductData($html,$price,$stock){
		phpQuery::newDocumentHTML($html);
		$price = pq('.pro_PriceInfo')->find('strong:first')->html();
		pq('.pro_Offer:first')->find('b')->remove();
		$offer = pq('.pro_Offer:first')->text();;
		if(sizeof(pq('#qty_product_0')) > 0){
			$stock = 1;
		}else{
			$stock = -1;
		}

		if(empty($offer)){
			$offer = pq('.ntRewardCoin2')->siblings('span')->html();
		}else{
			$offer .= " + " . pq('.ntRewardCoin2')->siblings('span')->html();
		}

		$html = pq('.pro_PriceInfo')->find('.option')->html();
		$html = strip_tags($html);
		if(strpos($html,'Free Shipping') !== false){
			$shipping_cost = 'Free Shipping';
		}else{
			$shipping_cost = 'Free Shipping Not Avaiable';
		}

		$shipping_time = '';
		$warrenty = '';

		foreach(pq('.pro_PriceInfo')->find('span') as $span){
			if(strpos(pq($span)->html(),'Warranty') !== false){
				$warrenty = pq($span)->html();
				break;
			}else if(strpos(pq($span)->html(),'Shipping Charges') !== false){
				$shipping_cost = pq($span)->html();
				break;
			}
		}


		$attr = array();
		foreach(pq('#color_product_0')->children('option') as $option){
			if(pq($option)->html() != 'Select'){
				if(!isset($attr['Color'])){
					$attr['Color'] = array();
				}
				$attr['Color'][] = pq($option)->html();
			}
		}
		$cat = '';
		foreach(pq('.bradCrumbDiv')->find('li') as $li){
			$cat .= pq($li)->children('a')->html().',';
		}

		$data = array(
				'price' => $price,
				'offer' => $offer,
				'stock' => $stock,
				'shipping_cost' => $shipping_cost,
				'shipping_time' => $shipping_time,
				'attr' => $attr,
				'author' => '',
				'cat' => $cat,
				'warrenty'=>$warrenty
		);

		$data = $this->cleanProductData($data);
		return $data;
	}
}