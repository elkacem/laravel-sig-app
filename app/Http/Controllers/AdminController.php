<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index2($requete){
        $c = oci_pconnect("entrepot", "crime", "//localhost/ORCL");

        $s = oci_parse($c, 'select commune,sum(nbrcrime) as nbr from crime,crimes where  id_locf=id  group by commune');
        oci_execute($s);
        oci_fetch_all($s, $res);


        $s1 = oci_parse($c, 'select lib_type,count(*) as nbr from crime c,typecrime t where c.id_typef=t.id_type group by lib_type');
        oci_execute($s1);
        oci_fetch_all($s1, $res1);

        $s2 = oci_parse($c, 'select anne,count(nbrcrime) as nbr1 from crime c,temps t where c.id_tpsf=t.id_tps group by anne order by anne');
        oci_execute($s2);
        oci_fetch_all($s2, $res2);

        $s3 = oci_parse($c, 'select nationalite,count(nbrcrime) as nbrn from crime c,criminel t where c.id_criminelf=t.id_criminel group by nationalite');
        oci_execute($s3);
        oci_fetch_all($s3, $res3);

        $s4 = oci_parse($c, 'select lib,count(agem) as nbra from crime,trancheage where  id_trn_agef=id_trn_age  group by lib');
        oci_execute($s4);
        oci_fetch_all($s4, $res4);

        $s5 = oci_parse($c, 'select daira,count(*) nbrp from postepolice  group by daira');
        oci_execute($s5);
        oci_fetch_all($s5, $res5);



        return view('charts',compact('res','res1','res2','res3','res4','res5','requete'));
    }
}




