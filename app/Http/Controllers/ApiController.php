<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getFirstCob()
    {
        $cobArry = array(
            array('cobName' => '미식'),
            array('cobName' => '여가오락'),
            array('cobName' => '호텔'),
            array('cobName' => '쇼핑'),
            array('cobName' => '여행관광지'),
            array('cobName' => '자동차서비스'),
            array('cobName' => '생활서비스'),
            array('cobName' => '결혼'),
            array('cobName' => '미인'),
            array('cobName' => '금융'),
            array('cobName' => '운동헬스'),
            array('cobName' => '의료'),
            array('cobName' => '교육'),
            array('cobName' => '훈련기관'),
            array('cobName' => '정부기관'),
            array('cobName' => '자연지물'),
            array('cobName' => '부동산'),
            array('cobName' => '회사기업'),
            array('cobName' => '기타'),
        );
        $output = json_encode($cobArry);
        return \Response::json($output);
    }

    public function getSecondCob()
    {
        $cobArry = array(
            array('cobName' => 'IT기업'),
            array('cobName' => '언론사'),
            array('cobName' => '공공사업'),
            array('cobName' => '부동산회사'),
            array('cobName' => '물류회사'),
            array('cobName' => '사무소'),
            array('cobName' => '출판사'),
            array('cobName' => '여행사'),
            array('cobName' => '컨설팅회사'),
            array('cobName' => '제조업'),
            array('cobName' => '헤드헌팅업체'),
            array('cobName' => '통신사'),
            array('cobName' => '건축회사'),
            array('cobName' => '인테리어회사'),
            array('cobName' => '중개업체'),
            array('cobName' => '상조회사'),
            array('cobName' => '예의회사'),
            array('cobName' => '홍보회사'),
            array('cobName' => '용역회사'),
            array('cobName' => '담배회사'),
            array('cobName' => '화학기업'),
            array('cobName' => '경매회사'),
            array('cobName' => '웨딩회사'),
            array('cobName' => '원예사'),
            array('cobName' => '인재시장'),
            array('cobName' => '공장'),
            array('cobName' => '광구'),
            array('cobName' => '영화사'),
            array('cobName' => '예술단'),
            array('cobName' => '기타')
        );
        $output = json_encode($cobArry);
        return \Response::json($output);
    }
    /*public function getCobSmall()
    {
        $ch = curl_init();
        $url = 'http://apis.data.go.kr/B553077/api/open/sdsc/smallUpjongList';
        $queryParams = '?' . urlencode('ServiceKey') . '=' . env('PUBLIC_DATA_POTAL_API_KEY', 'Blgb8hm991C%2F%2BXtKr4f1FmYy72GHGHPqmwpoo9DmlWOfSCvI3kYEJjyFGyb3g3I84aT9Yu2%2Bsc3j%2F%2FwfdW5ixA%3D%3D');
        $queryParams .= '&' . urlencode('indsLclsCd') . '=' . urlencode('Q');
        $queryParams .= '&' . urlencode('indsMclsCd') . '=' . urlencode('Q12');
        $queryParams .= '&' . urlencode('type') . '=' . urlencode('json');
        $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999');
        $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1');

        curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $response = curl_exec($ch);
        curl_close($ch);

        return \Response::json($response);
    }

    public function getCobMedium()
    {
        $ch = curl_init();
        $url = 'http://apis.data.go.kr/B553077/api/open/sdsc/middleUpjongList';
        $queryParams = '?' . urlencode('ServiceKey') . '=Blgb8hm991C%2F%2BXtKr4f1FmYy72GHGHPqmwpoo9DmlWOfSCvI3kYEJjyFGyb3g3I84aT9Yu2%2Bsc3j%2F%2FwfdW5ixA%3D%3D';
        $queryParams .= '&' . urlencode('indsLclsCd') . '=' . urlencode('O');
        $queryParams .= '&' . urlencode('type') . '=' . urlencode('json');
        $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999');
        $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1');

        curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $response = curl_exec($ch);
        curl_close($ch);

        return \Response::json($response);
    }

    public function getCobLarge()
    {
        $ch = curl_init();
        $url = 'http://apis.data.go.kr/B553077/api/open/sdsc/largeUpjongList';
        $queryParams = '?' . urlencode('ServiceKey') . '=Blgb8hm991C%2F%2BXtKr4f1FmYy72GHGHPqmwpoo9DmlWOfSCvI3kYEJjyFGyb3g3I84aT9Yu2%2Bsc3j%2F%2FwfdW5ixA%3D%3D';
        $queryParams .= '&' . urlencode('type') . '=' . urlencode('json');
        $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999');
        $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1');

        curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $response = curl_exec($ch);
        curl_close($ch);

        return \Response::json($response);
    }*/
}
