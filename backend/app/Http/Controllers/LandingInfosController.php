<?php

namespace App\Http\Controllers;

use App\Models\LandingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class LandingInfosController extends Controller
{
    public function list()
    {
        $landing_infos = LandingInfo::all();

        // dd($landing_infos);
        header('Content-Type: application/json');

        return Response::json($landing_infos, 200);
    }
    public function b64_gen(string $path)
    {
        $local = base_path() . '/' . $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($local);
        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }
    public function gen_data()
    {
        $longText = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layouts. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look";
        $email = "demo@gmail.com";
        $phone = "1234567890";
        $imageHeaderBase64 = $this->b64_gen('./imageHeader.png');
        $imageHomeFlat1Base64 = $this->b64_gen('./imageHomeFlat1.png');
        $imageHomeFlat2Base64 = $this->b64_gen('./imageHomeFlat2.png');
        $imageHomeFlat3Base64 = $this->b64_gen('./imageHomeFlat3.png');
        $imageBuildingBase64 = $this->b64_gen('./imageBuilding.png');
        $iconHouseBase64 = $this->b64_gen('./iconHouse.png');
        $imageExampleBase64 = $this->b64_gen('./imageExample.png');
        $data = [
            'longText' => $longText,
            'email' => $email,
            'phone' => $phone,
            'imageHeaderBase64' => $imageHeaderBase64,
            'imageHomeFlat1Base64' => $imageHomeFlat1Base64,
            'imageHomeFlat2Base64' => $imageHomeFlat2Base64,
            'imageHomeFlat3Base64' => $imageHomeFlat3Base64,
            'imageBuildingBase64' => $imageBuildingBase64,
            'iconHouseBase64' => $iconHouseBase64,
            'imageExampleBase64' => $imageExampleBase64,
        ];
        $landing = DB::table('landing_infos')->insert($data);
        $all = LandingInfo::all();
        header('Content-Type: application/json');
        // echo json_encode($all);
        return json_encode($all);
        
    }
    public function deleteTask($itemId) {
        $sql = 'DELETE FROM landing_infos '
                . 'WHERE id = :itemId';

        
        $landing = DB::delete($sql, ['itemId' => $itemId]);

        return json_encode($landing);
    }
}