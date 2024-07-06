<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class faceitlevelseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderamounts = array(
            array('id' => '1827','current_level' => 'Level 10 Elo 2001','desired_level' => '1','amount' => '13.7','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1828','current_level' => 'Level 10 Elo 2001','desired_level' => '2','amount' => '27.4','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1829','current_level' => 'Level 10 Elo 2001','desired_level' => '3','amount' => '41.1','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1830','current_level' => 'Level 10 Elo 2001','desired_level' => '4','amount' => '54.8','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1831','current_level' => 'Level 10 Elo 2001','desired_level' => '5','amount' => '68.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1832','current_level' => 'Level 10 Elo 2001','desired_level' => '6','amount' => '82.2','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1833','current_level' => 'Level 10 Elo 2001','desired_level' => '7','amount' => '95.9','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1834','current_level' => 'Level 10 Elo 2001','desired_level' => '8','amount' => '109.6','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1835','current_level' => 'Level 10 Elo 2001','desired_level' => '9','amount' => '123.3','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1836','current_level' => 'Level 10 Elo 2001','desired_level' => '10','amount' => '137','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1837','current_level' => 'Level 10 Elo 2150','desired_level' => '1','amount' => '17.9','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1838','current_level' => 'Level 10 Elo 2150','desired_level' => '2','amount' => '35.8','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1839','current_level' => 'Level 10 Elo 2150','desired_level' => '3','amount' => '53.7','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1840','current_level' => 'Level 10 Elo 2150','desired_level' => '4','amount' => '71.6','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1841','current_level' => 'Level 10 Elo 2150','desired_level' => '5','amount' => '89.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1842','current_level' => 'Level 10 Elo 2150','desired_level' => '6','amount' => '107.4','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1843','current_level' => 'Level 10 Elo 2150','desired_level' => '7','amount' => '125.3','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1844','current_level' => 'Level 10 Elo 2150','desired_level' => '8','amount' => '143.2','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1845','current_level' => 'Level 10 Elo 2150','desired_level' => '9','amount' => '161.1','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1846','current_level' => 'Level 10 Elo 2150','desired_level' => '10','amount' => '179','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1847','current_level' => 'Level 10 Elo 2300','desired_level' => '1','amount' => '19.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1848','current_level' => 'Level 10 Elo 2300','desired_level' => '2','amount' => '39.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1849','current_level' => 'Level 10 Elo 2300','desired_level' => '3','amount' => '58.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1850','current_level' => 'Level 10 Elo 2300','desired_level' => '4','amount' => '78','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1851','current_level' => 'Level 10 Elo 2300','desired_level' => '5','amount' => '97.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1852','current_level' => 'Level 10 Elo 2300','desired_level' => '6','amount' => '117','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1853','current_level' => 'Level 10 Elo 2300','desired_level' => '7','amount' => '136.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1854','current_level' => 'Level 10 Elo 2300','desired_level' => '8','amount' => '156','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1855','current_level' => 'Level 10 Elo 2300','desired_level' => '9','amount' => '175.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1856','current_level' => 'Level 10 Elo 2300','desired_level' => '10','amount' => '195','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1857','current_level' => 'Level 10 Elo 2450','desired_level' => '1','amount' => '20.1','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1858','current_level' => 'Level 10 Elo 2450','desired_level' => '2','amount' => '40.20','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1859','current_level' => 'Level 10 Elo 2450','desired_level' => '3','amount' => '60.3','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1860','current_level' => 'Level 10 Elo 2450','desired_level' => '4','amount' => '80.40','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1861','current_level' => 'Level 10 Elo 2450','desired_level' => '5','amount' => '100.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1862','current_level' => 'Level 10 Elo 2450','desired_level' => '6','amount' => '120.6','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1863','current_level' => 'Level 10 Elo 2450','desired_level' => '7','amount' => '140.7','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1864','current_level' => 'Level 10 Elo 2450','desired_level' => '8','amount' => '160.8','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1865','current_level' => 'Level 10 Elo 2450','desired_level' => '9','amount' => '180.9','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1866','current_level' => 'Level 10 Elo 2450','desired_level' => '10','amount' => '201','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1867','current_level' => 'Level 10 Elo 2600','desired_level' => '1','amount' => '22.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1868','current_level' => 'Level 10 Elo 2600','desired_level' => '2','amount' => '45.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1869','current_level' => 'Level 10 Elo 2600','desired_level' => '3','amount' => '67.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1870','current_level' => 'Level 10 Elo 2600','desired_level' => '4','amount' => '90.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1871','current_level' => 'Level 10 Elo 2600','desired_level' => '5','amount' => '112.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1872','current_level' => 'Level 10 Elo 2600','desired_level' => '6','amount' => '135','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1873','current_level' => 'Level 10 Elo 2600','desired_level' => '7','amount' => '157.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1874','current_level' => 'Level 10 Elo 2600','desired_level' => '8','amount' => '180.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1875','current_level' => 'Level 10 Elo 2600','desired_level' => '9','amount' => '202.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1876','current_level' => 'Level 10 Elo 2600','desired_level' => '10','amount' => '225','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1877','current_level' => 'Level 10 Elo 2750','desired_level' => '1','amount' => '26.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1878','current_level' => 'Level 10 Elo 2750','desired_level' => '2','amount' => '53.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1879','current_level' => 'Level 10 Elo 2750','desired_level' => '3','amount' => '79.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1880','current_level' => 'Level 10 Elo 2750','desired_level' => '4','amount' => '106.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1881','current_level' => 'Level 10 Elo 2750','desired_level' => '5','amount' => '132.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1882','current_level' => 'Level 10 Elo 2750','desired_level' => '6','amount' => '159','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1883','current_level' => 'Level 10 Elo 2750','desired_level' => '7','amount' => '185.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1884','current_level' => 'Level 10 Elo 2750','desired_level' => '8','amount' => '212.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1885','current_level' => 'Level 10 Elo 2750','desired_level' => '9','amount' => '238.5','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1886','current_level' => 'Level 10 Elo 2750','desired_level' => '10','amount' => '265','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1887','current_level' => 'Level 10 Elo 2900','desired_level' => '1','amount' => '42.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1888','current_level' => 'Level 10 Elo 2900','desired_level' => '2','amount' => '84.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1889','current_level' => 'Level 10 Elo 2900','desired_level' => '3','amount' => '126.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1890','current_level' => 'Level 10 Elo 2900','desired_level' => '4','amount' => '168.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1891','current_level' => 'Level 10 Elo 2900','desired_level' => '5','amount' => '210.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1892','current_level' => 'Level 10 Elo 2900','desired_level' => '6','amount' => '252.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1893','current_level' => 'Level 10 Elo 2900','desired_level' => '7','amount' => '294.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1894','current_level' => 'Level 10 Elo 2900','desired_level' => '8','amount' => '336.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1895','current_level' => 'Level 10 Elo 2900','desired_level' => '9','amount' => '378.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1896','current_level' => 'Level 10 Elo 2900','desired_level' => '10','amount' => '420','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1897','current_level' => 'Level 10 Elo 3050','desired_level' => '1','amount' => '59.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1898','current_level' => 'Level 10 Elo 3050','desired_level' => '2','amount' => '118.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1899','current_level' => 'Level 10 Elo 3050','desired_level' => '3','amount' => '177.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1900','current_level' => 'Level 10 Elo 3050','desired_level' => '4','amount' => '236.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1901','current_level' => 'Level 10 Elo 3050','desired_level' => '5','amount' => '295.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1902','current_level' => 'Level 10 Elo 3050','desired_level' => '6','amount' => '354.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1903','current_level' => 'Level 10 Elo 3050','desired_level' => '7','amount' => '413.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1904','current_level' => 'Level 10 Elo 3050','desired_level' => '8','amount' => '472.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1905','current_level' => 'Level 10 Elo 3050','desired_level' => '9','amount' => '531.00','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost'),
            array('id' => '1906','current_level' => 'Level 10 Elo 3050','desired_level' => '10','amount' => '590','created_at' => NULL,'updated_at' => NULL,'boost_type' => 'Faceit Win Boost')
          );
          
        DB::table('orderamounts')->insert($orderamounts);
    }
}
