<?php

class ItemSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('items')->delete();
		DB::table('items')->insert(array(
			array(
				'name'    => '%E7%BE%8E%E5%9B%BDRii%20mini%20i8%2B%E6%97%A0%E7%BA%BF%E8%BF%B7%E4%BD%A0%E6%99%BA%E8%83%BD%E9%94%AE%E7%9B%98%20%E5%85%A8%E9%94%AE%E7%9B%98%202.4G%E6%97%A0%E7%BA%BF%E8%BF%9E%E6%8E%A5',
				'url' => 'http%3A%2F%2Fdetail.tmall.com%2Fitem.htm%3Fspm%3Da230r.1.14.1.uzK1js%26id%3D41227967203%26ad_id%3D%26am_id%3D%26cm_id%3D140105335569ed55e27b%26pm_id%3D%26abbucket%3D3%26sku_properties%3D',
				'specification' => '%E9%BB%84%E8%89%B2',
				'qty' => 1,
				'price' => 129.00000,
				'total' => 129.00000,
				'member_id' => 1,
				),
			array(
				'name'    => '%E7%B1%B3%E5%A6%AE%E5%93%88%E9%B2%81%E7%AB%A5%E8%A3%852015%E6%98%A5%E8%A3%85%E6%96%B0%E6%AC%BE%E6%AF%8D%E5%A5%B3%E4%BA%B2%E5%AD%90%E8%A3%85%E9%9F%A9%E7%89%88%E4%B8%A4%E4%BB%B6%E5%BC%8F%E8%BF%9E%E8%A1%A3%E8%A3%99ZD2010%E9%8B%90',
				'url' => 'http%3A%2F%2Fdetail.tmall.com%2Fitem.htm%3Fspm%3Da230r.1.14.18.LD92vN%26id%3D18903291690%26ad_id%3D%26am_id%3D%26cm_id%3D140105335569ed55e27b%26pm_id%3D%26abbucket%3D3',
				'specification' => '110%2F56',
				'qty' => 3,
				'price' => 145.00000,
				'total' => 435.00000,
				'member_id' => 1,
				),
			array(
				'name'    => '31%E6%AC%BE%E8%B6%A3%E5%91%B3%E6%8B%8D%E6%91%84%E9%81%93%E5%85%B7%E6%90%9E%E6%80%AA%E8%83%A1%E5%AD%90%E7%9C%BC%E9%95%9C%E9%80%A0%E5%9E%8B%E6%8B%8D%E7%85%A7%E5%B0%8F%E9%81%93%E5%85%B7%E5%A9%9A%E7%A4%BC%E7%94%9F%E6%97%A5%E6%B4%BE%E5%AF%B9%E5%BF%85%E5%A4%87%',
				'url' => 'http%3A%2F%2Fitem.taobao.com%2Fitem.htm%3Fspm%3Da230r.1.14.36.ckmLSk%26id%3D41026358296%26ns%3D1%26abbucket%3D3%23detail',
				'specification' => '-',
				'qty' => 1,
				'price' => 34.20000,
				'total' => 34.20000,
				'member_id' => 1,
				),
			array(
				'name'    => '%E9%80%B8%E7%BA%A2%E9%A2%9C%20%E7%AE%80%E7%88%B1%20%E8%95%BE%E4%B8%9D%E6%97%97%E8%A2%8D%E7%A7%8B%E8%A3%852014%E6%96%B0%E6%AC%BE%E6%94%B9%E8%89%AF%E6%97%B6%E5%B0%9A%E4%BF%AE%E8%BA%AB%E6%97%97%E8%A2%8D%E8%BF%9E%E8%A1%A3%E8%A3%99%E6%B0%94%E8%B4%A8',
				'url' => 'http%3A%2F%2Fdetail.tmall.com%2Fitem.htm%3Fspm%3Da230r.1.14.17.VRvqEg%26id%3D15725005846%26ad_id%3D%26am_id%3D%26cm_id%3D140105335569ed55e27b%26pm_id%3D%26abbucket%3D3',
				'specification' => 'S',
				'qty' => 5,
				'price' => 227.00000,
				'total' => 1135.00000,
				'member_id' => 1,
				)
			));
}

}