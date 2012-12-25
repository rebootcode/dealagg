<?php
class Naaptol extends Parsing{
	public $_code = 'Naaptol';

	public function getAllowedCategory(){
		return array(Category::MOBILE,Category::MOBILE_ACC,Category::BOOKS);
	}

	public function getWebsiteUrl(){
		return 'http://www.naaptol.com';
	}
	public function getSearchURL($query,$category = false){
		if($category == Category::MOBILE){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=27&kw=$query&sb=49,9,8&req=ajax";
		}else if($category == Category::BOOKS){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=2578&kw=$query&sb=49,9,8&req=ajax";
		}else if($category == Category::MOBILE_ACC){
			return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&fltrNam=catFltr&catid=4&kw=$query&sb=49,9,8&req=ajax";
		}
		return "http://www.naaptol.com/faces/jsp/search/searchResults.jsp?type=srch_catlg&kw=samsung&sb=49,9,8&req=ajax";
	}
	public function getLogo(){
		return "http://images2.naptol.com/usr/local/csp/staticContent/images_layout/naaptolXmasLogo.gif";
	}
	public function getData($html,$query,$category){

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
		$data = $this->bestMatchData($data, $query,$category);
		return $data;
	}
}