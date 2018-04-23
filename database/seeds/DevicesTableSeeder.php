<?php

use Illuminate\Database\Seeder;
use App\Device;
use App\Traceability;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Traceability::create([
            'device_id' => 1,
            'funcionary_id' => 16,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //2
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'CPU serial AJ2002403000014, Intel ® Core ™ i3 3,20 GHz, Disco Duro 1 Tb, Memoria Ram 1,74 Gb, Monitor ACER Modelo S181H2 serial ETLRF0D0011320E84C8526, Teclado Genius Modelo K639, Mouse Genius Modelo GM-110020',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2011-05-02', //
            'initoperation' => '2011-05-02',
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ2002403000014',
            'code' => '00537',
            'observations' => 'El equipo está en fac-granja'
        ]);
        Traceability::create([
            'device_id' => 2,
            'funcionary_id' => 17,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //3
        Device::create([
            'mant'=>'ok',
            'funcionary_id' => 18,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'PC serial PBLFA52, LENOVO CPU Intel ® Core ™ i3 3,40 GHz, Disco Duro 500 Gb, Memoria Ram 2,85 Gb, Monitor Lenovo Modelo D186WA V1VAC80, Teclado Lenovo Modelo KU-0225 3625740, Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-10-08', 
            'initoperation' => '2013-10-08',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFA52',
            'code' => '0551',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 3,
            'funcionary_id' => 18,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //4
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 19,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'PC LENOVO Serial MJYMCLA CPU Intel ® Core ™ i3 3,30 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo LS1922WA Serial: V366612, Teclado genius Modelo K636, Mouse Lenovo Modelo M-U0025-C',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-05-07', 
            'initoperation' => '2013-05-07',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJYMCLA',
            'code' => '0545',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 4,
            'funcionary_id' => 19,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //5
        Device::create([
            'mant'=> 'ok',
            'funcionary_id' => 20,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'PC LENOVO Serial PB0226YV, CPU Intel ® Core ™ i5 2,70 Ghz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo 03T8464 serial v5034782, Teclado Lenovo Modelo KU-0025 serial 6565839, Mouse Lenovo',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-09-15', 
            'initoperation' => '2014-09-15',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB0226YV',
            'code' => '0174',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 5,
            'funcionary_id' => 20,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //6
        Device::create([
            'funcionary_id' => 55,
            'ubication_id' => 1,
            'dependence_id' => 19,
            'element_id' => 1,
            'description' => 'COMPUTADOR LENOVO Serial PBHGM91, CPU INTEL ® CORE ™ I3 - 2130 3,40 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA Serial V1VAC86, Teclado Dell SK-8115 Serial CIU0DJ415-71616-7AI-0MLQ, Mouse Lenovo Modelo MU-0025-O Serial LZ209HD026Z',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-04', 
            'initoperation' => '2012-09-04',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM91',
            'code' => '00786',
            'observations' => 'Estubo anteriormente en Auditoria de Cuentas Médicas Fanny Llanos'
        ]);
        Traceability::create([
            'device_id' => 6,
            'funcionary_id' => 55,
            'ubication_id' => 1,
            'dependence_id' => 19,
            'observations' => 'Sin observaciones'
        ]);
        //7
        Device::create([
            'funcionary_id' => 1,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'element_id' => 1,
            'description' => 'Lenovo serial PBHGM36, CPU Intel ® Core ™ i3 3.4 Ghz, Disco Duro 500Gb, Memoria Ram 8 Gb, Monitor Lenovo Modelo D186WA, Teclado Lenovo Modelo SK-8821, Mouse GENIUS Modelo GM-120014',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-04', 
            'initoperation' => '2012-09-04',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM36',
            'code' => '2402',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 7,
            'funcionary_id' => 1,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'observations' => 'Sin observaciones'
        ]);
        //8
        Device::create([
            'funcionary_id' => 2,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'element_id' => 1,
            'description' => 'Lenovo serial MJ456BF, CPU Intel ® Core ™ i5-3470 3.20 GHz, Memoria RAM 4,00 Gb, Disco Duro 500 Gb, Monitor Lenovo Modelo 60AB-00R1-WW serial V5034801 Teclado Lenovo Modelo SK-8825, Mouse Genius Modelo NetScrollEYE',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-09-10', 
            'initoperation' => '2013-09-10',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ456BF',
            'code' => '2403',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 8,
            'funcionary_id' => 2,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'observations' => 'Sin observaciones'
        ]);
        //9
        Device::create([
            'funcionary_id' => 1,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'element_id' => 1,
            'description' => 'Servidor HP Proliant ML350p Gen8 serial 66267-001, UPS MTEK modelo TY1000 Serial B411HA0F1129 sin placa, Teclado Hp modelo Ku0316, mouse Genius modelo Gm-120014, MEMORIA RAM 24 GB, DISCO DURO 3 TB',
            'status' => 'BUENO',
            'cost' => '20000000',
            'datebuy' => '2014-11-20', 
            'initoperation' => '2014-11-20',
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => '66267-001',
            'code' => '0842',
            'observations' => 'Servidor principal'
        ]);
        Traceability::create([
            'device_id' => 9,
            'funcionary_id' => 1,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'observations' => 'Sin observaciones'
        ]);
        //10
        Device::create([
            'funcionary_id' => 1,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'element_id' => 1,
            'description' => 'SERVIDOR HP Proliant ML350 G6 serial MXQ20804Y5, CPU Intel ® Xeon ® cpu 2.40 GHz, Disco Duro 1 Tb, Memoria Ram 14 Gb, Monitor Samsung Modelo S19A300B serial ZBBNHVLBC00922T, Teclado HP Modelo SK-2880, Mouse Genius Modelo GM-120014',
            'status' => 'BUENO',
            'cost' => '10000000',
            'datebuy' => '2013-01-08', 
            'initoperation' => '2013-01-08',
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => 'MXQ20804Y5',
            'code' => '1179',
            'observations' => 'Servidor de internet ubicado en el cuarto técnico'
        ]);
        Traceability::create([
            'device_id' => 10,
            'funcionary_id' => 1,
            'ubication_id' => 1,
            'dependence_id' => 1,
            'observations' => 'Sin observaciones'
        ]);
        //11
        Device::create([
            'funcionary_id' => 11,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Lenovo serial PBHGM23, CPU Intel ® Core ™ i3-2130 3.4 GHz, Disco Duro 500 Gb, Memoria RAM 4 Gb, Monito Lenovo Modelo D186WA serial V1VAC67, Teclado Lenovo Modelo SK-8821, Mouse Lenovo Modelo U0025-O',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-05', 
            'initoperation' => '2012-09-05',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM23',
            'code' => '00396',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 11,
            'funcionary_id' => 11,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //12
        Device::create([
            'funcionary_id' => 11,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Portatil Lenovo thinkpad E440, DISCO DURO 500 Gb, Memoria RAM 4Gb, CPU INTEL CORE i5, Serial PF-03XTCT 14/8.',
            'status' => 'BUENO',
            'cost' => '2900000',
            'datebuy' => '2015-05-30', 
            'initoperation' => '2015-05-30',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PF-03XTCT 14/8',
            'code' => '00976',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 12,
            'funcionary_id' => 11,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //13
        Device::create([
            'funcionary_id' => 21,
            'ubication_id' => 3,
            'dependence_id' => 17,
            'element_id' => 1,
            'description' => 'LENOVO modelo MT - M 10B7 - 0029LS, Serial MJ004CHQ, CPU INTEL® CORE ™ i5 - 4430 3 GHz, Disco Duro 500 Gb, Memoria Ram 4 Gb, monitor Lenovo Modelo 03X2023WC, Teclado Lenovo Modelo SK-8821, Mouse Lenovo Modelo Moeuuo.',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2012-09-05', 
            'initoperation' => '2012-09-05',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ004CHQ',
            'code' => '2404',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 13,
            'funcionary_id' => 21,
            'ubication_id' => 3,
            'dependence_id' => 17,
            'observations' => 'Sin observaciones'
        ]);
        //14
        Device::create([
            'funcionary_id' => 4,
            'ubication_id' => 1,
            'dependence_id' => 3,
            'element_id' => 1,
            'description' => 'PC LENOVO serial MJ004CJ9, CPU Intel ® Core ™ i5 3 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo modelo LS2023WC serial VN90070 , Teclado Lenovo Modelo KU-0225 serial ss28932, Mouse Lenovo',
            'status' => 'BUENO',
            'cost' => '2497500',
            'datebuy' => '2014-02-28', 
            'initoperation' => '2014-02-28',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ004CJ9',
            'code' => '02333',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 14,
            'funcionary_id' => 4,
            'ubication_id' => 1,
            'dependence_id' => 3,
            'observations' => 'Sin observaciones'
        ]);
        //15
        Device::create([
            'funcionary_id' => 3,
            'ubication_id' => 2,
            'dependence_id' => 2,
            'element_id' => 1,
            'description' => 'Computador LENOVO THINKCENTRE Serial 1S10AU00DHLSPC02RMRP, CPU INTEL® CORE™ I5-4460T 1,90 GHz, Memoria Ram 4Gb, Unidad de DVD-MULTIRECORDER DVD Ram, Audio Integrado Realtek High Definition Audio, Monitor Lenovo Modelo 60AB-AAR1-WW Serial V5679259.',
            'status' => 'BUENO',
            'cost' => '2587477',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => '1S10AU00DHLSPC02RMRP',
            'code' => '00981',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 15,
            'funcionary_id' => 3,
            'ubication_id' => 2,
            'dependence_id' => 2,
            'observations' => 'Sin observaciones'
        ]);
        //16
        Device::create([
            'funcionary_id' => 3,
            'ubication_id' => 2,
            'dependence_id' => 2,
            'element_id' => 1,
            'description' => 'PC serial AJ2002403000084, CPU Intel ® Core ™ i3 cpu 4 núcleos 3,20 GHz, Disco Duro 500 Gb, Memoria Ram 1,74 Gb, Monitor Samsung Modelo 519A300B, Teclado Genius Modelo KU-0138, Mouse Genius Modelo 70-841, parlantes Silver Modelo D15-128',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2011-05-02', 
            'initoperation' => '2011-05-02',
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ2002403000084',
            'code' => '02331',
            'observations' => 'Equipo del auxiliar de contabilidad'
        ]);
        Traceability::create([
            'device_id' => 16,
            'funcionary_id' => 3,
            'ubication_id' => 2,
            'dependence_id' => 2,
            'observations' => 'Sin observaciones'
        ]);
        //17
        Device::create([
            'funcionary_id' => 22,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Lenovo modelo 00DHLS Serial PC02RMRR, CPU Intel Core i5 1.90 GHz, RAM 4Gb, monitor Lenovo modelo 03T8464 serial v5679252, teclado y mouse originales',
            'status' => 'BUENO',
            'cost' => '2587477',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PC02RMRR',
            'code' => '1102',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 17,
            'funcionary_id' => 22,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //18
        Device::create([
            'funcionary_id' => 23,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 1652-R4S Serial PBHGM39,CPU Intel ® Core ™ I3 , Disco Duro 500 Gb, Memoria Ram 2,85 Gb, Monitor Lenovo Modelo D186WA SERIAL V1VAC72, Teclado Lenovo Modelo SK8821, Mouse FC-CE (sin modelo)',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-10-22', 
            'initoperation' => '2012-10-22',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM39',
            'code' => '01171',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 18,
            'funcionary_id' => 23,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'observations' => 'Sin observaciones'
        ]);
        //19
        Device::create([
            'funcionary_id' => 7,
            'ubication_id' => 1,
            'dependence_id' => 6,
            'element_id' => 1,
            'description' => 'LENOVO THINKCENTRE M72E serial MJ455YX, CPU INTEL CORE I5 - 3470, Monitor Lenovo modelo LS1922WA Serial V3VR921, Memoria Ram de 4 Gb, Disco duro de 500 Gb, 7200 RPM SATA HDD, SERIAL SV3VR921 CON RESPECTIVOS ACCESORIOS (Cable de poder,mouse,teclado,cd)',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-09-03', 
            'initoperation' => '2013-09-03',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455YX',
            'code' => '2321',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 19,
            'funcionary_id' => 7,
            'ubication_id' => 2,
            'dependence_id' => 6,
            'observations' => 'Sin observaciones'
        ]);
        //20
        Device::create([
            'funcionary_id' => 24,
            'ubication_id' => 1,
            'dependence_id' => 6,
            'element_id' => 1,
            'description' => 'PORTATIL LENOVO THINKPAD E440 Sin Serial, CPU INTEL ® CORE ™ I5, Memoria RAM 4,00 Gb, Unidad de CD DVD-RW, Disco Duro 500 Gb Serial ATA DEVICE.',
            'status' => 'BUENO',
            'cost' => '2420823',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'Sin serial',
            'code' => '0985',
            'observations' => 'Funciona con monitor y teclado ya que está dañado por Mesias en una comisión'
        ]);
        Traceability::create([
            'device_id' => 20,
            'funcionary_id' => 24,
            'ubication_id' => 2,
            'dependence_id' => 6,
            'observations' => 'Sin observaciones'
        ]);
        //21
        Device::create([
            'funcionary_id' => 8,
            'ubication_id' => 1,
            'dependence_id' => 19,
            'element_id' => 1,
            'description' => 'Lenovo serial PBLFB77, CPU Intel ® Core ™ i3 3.4 Ghz, Disco Duro 500Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA, Teclado Lenovo Modelo KU-0225, Mouse ACER Modelo SM-9020B.',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-05', 
            'initoperation' => '2012-09-05', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFB77',
            'code' => '0735',
            'observations' => 'Secretaria de gerencia'
        ]);
        Traceability::create([
            'device_id' => 21,
            'funcionary_id' => 8,
            'ubication_id' => 1,
            'dependence_id' => 19,
            'observations' => 'Sin observaciones'
        ]);
        //22
        Device::create([
            'funcionary_id' => 25,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Computador PC-SMART ALL IN ONE Modelo AIOGOB21 - A, Serial P2957011500672(M22-L5), MEMORIA RAM 4,00 GB, Disco Duro 500 GB, CPU INTEL® CORE™ I3 3.50 GHz,Windows 8.1 PRO',
            'status' => 'BUENO',
            'cost' => '2136106',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 8,
            'serial' => 'P2957011500672(M22-L5)',
            'code' => '01160',
            'observations' => 'Usado por Paiweb'
        ]);
        Traceability::create([
            'device_id' => 22,
            'funcionary_id' => 25,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //23
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 26,
            'ubication_id' => 1,
            'dependence_id' => 20,
            'element_id' => 1,
            'description' => 'PC LENOVO Serial MJ004CHL Intel ® Core ™ i5 3,00 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo modelo LS2023WC Serial VN89785, Teclado Genius Modelo K639, Mouse Genius Modelo GM-120014',
            'status' => 'BUENO',
            'cost' => '0',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ004CHL',
            'code' => '0598',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 23,
            'funcionary_id' => 26,
            'ubication_id' => 1,
            'dependence_id' => 20,
            'observations' => 'Sin observaciones'
        ]);
        //24
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 10,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Computador LENOVO Corporativo Think Centre Edge 71 (1652R4S)-CORE i3 2400S 2.5 GHZ Memoria RAM 4GB (Instalados) 8GB (Max)-DDR3 SDRAM-1333 Mhz-P3, Disco duro 1 x 500GB- estándar Serial ATA-300. Almacenamiento óptico grabadora DVD. Monitor LENNOVO 2580-AB1 D186 WIDE FLAT PANEL MONITOR. Controlador graico Intel HD Grapfics 2000 Dynamic Video Memory Technology.',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-07', 
            'initoperation' => '2012-09-07', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => ' PBLFB55',
            'code' => '0208',
            'observations' => 'El equipo llegó de UEN Miraflores para mantenimiento, se habilitó y se asignó a saneamiento Jesus Beltrán'
        ]);
        Traceability::create([
            'device_id' => 24,
            'funcionary_id' => 10,
            'ubication_id' => 1,
            'dependence_id' => 21,
            'observations' => 'Sin observaciones'
        ]);
        //25
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'element_id' => 1,
            'description' => 'COMPUTADOR LENOVO E73, SFF SMALL FROM FACTOR, PROCESADOR INTEL CORE i5, 3.20 Ghz, MEMORIA RAM TIPO DDR3, 4GB, 16GB, TARJETA DE RED 10/100/1000MB (GIGA), DISCO DURO: 500GB, DISPOSITIVO OPTICO QUEMADOR DVD LS, SISTEMA OPERATIVO WINDOWS 8 PRO DOWNGRADE W 7 PRO, GARANTIA 3 AÑOS, TECLADO USB, MOUSE USB, CON MONITOR LENOVO, MODELO LS2023, 20 WIDE, RESOLUCION 1600*900, SEÑAL VIDEO DVI, VGA; CONECTOR VGA, MARCA LED SERIAL CPU: PB0226S4 MONITOR: V5034458',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-09-05', 
            'initoperation' => '2014-09-05', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB0226S4',
            'code' => '0175',
            'observations' => 'Recibido en préstamo del pic municipal por Anayiber Comba alrededor del 15 de enero de 2017'
        ]);
        Traceability::create([
            'device_id' => 25,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'observations' => 'Sin observaciones'
        ]);
        //26
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'element_id' => 1,
            'description' => 'COMPUTADOR LENOVO E73, SFF SMALL FROM FACTOR, PROCESADOR INTEL CORE i5, 3.20 Ghz, MEMORIA RAM TIPO DDR3, 4GB, 16GB, TARJETA DE RED 10/100/1000MB (GIGA), DISCO DURO: 500GB, DISPOSITIVO OPTICO QUEMADOR DVD LS, SISTEMA OPERATIVO WINDOWS 8 PRO DOWNGRADE W 7 PRO, GARANTIA 3 AÑOS, TECLADO USB, MOUSE USB, CON MONITOR LENOVO, MODELO LS2023, 20 WIDE, RESOLUCION 1600*900, SEÑAL VIDEO DVI, VGA; CONECTOR VGA, MARCA LED SERIAL CPU: PB0254XR MONITOR: V5034896',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-09-19', 
            'initoperation' => '2014-09-19', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB0254XR',
            'code' => '0176',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 26,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'observations' => 'Sin observaciones'
        ]);
        //27
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'element_id' => 1,
            'description' => 'PC LENOVO CPU Intel ® Core ™ i3 3,40 Ghz, Serial PBLFC33 Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA serial V1VAC96, Teclado Lenovo Modelo SK-8825(L), Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-05', 
            'initoperation' => '2012-09-05', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFC33',
            'code' => '1001',
            'observations' => 'Usado por Miriam campos'
        ]);
        Traceability::create([
            'device_id' => 27,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'observations' => 'Sin observaciones'
        ]);
        //28
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'element_id' => 1,
            'description' => 'CPU INTEL® CORE ™ I3 PBLHE96, MEMORIA RAM 2,85 Gb, DISCO DURO 500 Gb, MONITOR SAMSUNG MODELO SYNCMASTER740 SERIAL 3743, TECLADO HP MODELO KU-0316 SERIAL BC3720DVBVK5L8',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-03', 
            'initoperation' => '2012-09-03', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLHE96',
            'code' => 'Verificar placa',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 28,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 9,
            'observations' => 'Sin observaciones'
        ]);
        //29
        Device::create([
            'funcionary_id' => 15,
            'ubication_id' => 2,
            'dependence_id' => 8,
            'element_id' => 1,
            'description' => 'Compaq TORRE Serial: MXX7160GHP CPU Intel ® Celeron ® 3.33 GHz, Disco Duro 230 Gb, Memoria Ram 2 Gb, Monitor Compaq Modelo HSTND-2231-A, Teclado Unitec, Mouse Compaq Mdelo UAE96.',
            'status' => 'BUENO',
            'cost' => '500000',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => 'MXX7160GHP',
            'code' => '0401',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 29,
            'funcionary_id' => 15,
            'ubication_id' => 2,
            'dependence_id' => 8,
            'observations' => 'Sin observaciones'
        ]);
        //30
        Device::create([
            'funcionary_id' => 27,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 1652-R4S Serial PBHGN47, Intel ® Core™ i3 3,40 GHz, Disco Duro 500 Gb, Memoria Ram 2,85 Gb, Monitor Lenovo Modelo D186WA serial v1vac73, Teclado Lenovo Modelo SK-8821, Mouse Genius GM-120014',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-10', 
            'initoperation' => '2012-09-10',
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGN47',
            'code' => '01169',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 30,
            'funcionary_id' => 27,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'observations' => 'Sin observaciones'
        ]);
        //31
        Device::create([
            'funcionary_id' => 12,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'LENOVO Serial 1510AUA00Y00PB02 PLACA 0845, Intel ® Core ™ i5 CPU 2,70 GHz, Memoria Ram 4,00 Gb, Unidad de DVD-RW ATA DEVICE, Monitor Lenovo 03T8464 Serial v5034887, Teclado Lenovo Modelo KU-0225 Serial 6706491, Mouse Lenovo Modelo MOEUUOA Serial 44Z9229',
            'status' => 'BUENO',
            'cost' => '3104972',
            'datebuy' => '2015-06-19', 
            'initoperation' => '2015-06-19', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB02WOMT',
            'code' => '0845',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 31,
            'funcionary_id' => 12,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //32
        Device::create([
            'funcionary_id' => 9,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Computador Acer modelo AX1430 SERIAL 13902587930 ,  PC CPU AMD E-450 RADEON (TH), Disco Duro 500 Gb, Memoria Ram 4,00 Gb DDR3, Unidad de DVD/CD ROM',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2012-09-03', 
            'initoperation' => '2012-09-03', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => '13902587930',
            'code' => '01174',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 32,
            'funcionary_id' => 9,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //33
        Device::create([
            'funcionary_id' => 28,
            'ubication_id' => 3,
            'dependence_id' => 22,
            'element_id' => 1,
            'description' => 'Portátil Toshiba Satélite c845 - sp4201SL Serial 4c132139w, RAM 2Gb, CPU intel pentium B960 2,2 Ghz',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-07-02', 
            'initoperation' => '2012-07-02', 
            'usefullife' => '5',
            'brand_id' => 9,
            'serial' => '4C132139W',
            'code' => '0721',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 33,
            'funcionary_id' => 28,
            'ubication_id' => 3,
            'dependence_id' => 22,
            'observations' => 'Sin observaciones'
        ]);
        //34
        Device::create([
            'funcionary_id' => 29,
            'ubication_id' => 1,
            'dependence_id' => 11,
            'element_id' => 1,
            'description' => 'ACER AX14-30 SD31F SERIAL PTSHVP9003139065173000, Disco duro 500 GB, MEMORIA RAM 4,00 GB, monitor acer modelo AL1706A Serial ETL510845962506C714200',
            'status' => 'BUENO',
            'cost' => '500000',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => 'PTSHVP9003139065173000',
            'code' => '2617',
            'observations' => 'Equipo usado por la auxiliar Johanna Aguilar'
        ]);
        Traceability::create([
            'device_id' => 34,
            'funcionary_id' => 29,
            'ubication_id' => 1,
            'dependence_id' => 11,
            'observations' => 'Sin observaciones'
        ]);
           //35
        Device::create([
            'funcionary_id' => 30,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU 00DHLS Serial PC02RMSJ, CPU inteligencia corei5, memoria RAM 4Gb,Monitor Lenovo 03T8464 Serial V5678664, Teclado Original Lenovo modelo KU-0225, Mouse original Lenovo Modelo MSU1175, Disco Duro 500 Gb Sata.',
            'status' => 'BUENO',
            'cost' => '2639226',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PC02RMSJ',
            'code' => '0982',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 35,
            'funcionary_id' => 30,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'observations' => 'Sin observaciones'
        ]);
           //36
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 31,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador Lenovo serial: MJ03LRX5, Intel Corei 7, 4,00 GB memoria RAM, 500 GB Disco duro.',
            'status' => 'BUENO',
            'cost' => '4800000',
            'datebuy' => '2016-08-01', 
            'initoperation' => '2016-08-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ03LRX5',
            'code' => '2562',
            'observations' => 'Anteriormente lo usó Kleimar en Jurídica'
        ]);
        Traceability::create([
            'device_id' => 36,
            'funcionary_id' => 31,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //37
        Device::create([
            'funcionary_id' => 32,
            'ubication_id' => 2,
            'dependence_id' => 7,
            'element_id' => 1,
            'description' => 'Acer serial PTSHVP9003139064AD3000, PC CPU AMD E-450 RADEON (TH), Disco Duro 500 Gb, Memoria Ram 4,00 GB DDR3, Unidad de DVD/CD ROM',
            'status' => 'BUENO',
            'cost' => '900000',
            'datebuy' => '2012-07-02', 
            'initoperation' => '2012-07-02', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => 'PTSHVP9003139064AD3000',
            'code' => '2820',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::
        create([
            'device_id' => 37,
            'funcionary_id' => 32,
            'ubication_id' => 2,
            'dependence_id' => 7,
            'observations' => 'Sin observaciones'
        ]);
        //38
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 13,
            'ubication_id' => 1,
            'dependence_id' => 24,
            'element_id' => 1,
            'description' => 'PC THINKCENTRE LENOVO Serial MJ004CGX, CPU Intel ® Core ™ i5, 3,00 GHz, Disco Duro 500 GB, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS2023WC serial VN90004, Teclado Lenovo Modelo KU-0225, Mouse Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '2497500',
            'datebuy' => '2014-02-28', 
            'initoperation' => '2014-02-28', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ004CGX',
            'code' => '0659',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 38,
            'funcionary_id' => 13,
            'ubication_id' => 1,
            'dependence_id' => 24,
            'observations' => 'Sin observaciones'
        ]);
        //39
        Device::create([
            'funcionary_id' => 33,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'element_id' => 1,
            'description' => 'PORTATIL COMPAQ HEWLETT PACKARD 515 SERIAL CNU928281Y, CPU AMD Semprom ™ 2,10 GHz, Disco Duro 150 Gb, Memoria Ram 2,00 Gb, CD-DVD Ata Device',
            'status' => 'REGULAR',
            'cost' => '0',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => 'CNU928281Y',
            'code' => '0591',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 39,
            'funcionary_id' => 33,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'observations' => 'Sin observaciones'
        ]);
        //40
        Device::create([
            'funcionary_id' => 34,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 1652-R4S Serial PBHGN03, CPU INTEL ® Core ™ i3 3,40 Ghz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA serial V1VAC46, Teclado Lenovo Modelo SK-8821, Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-07', 
            'initoperation' => '2012-09-07', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGN03',
            'code' => '2313',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 40,
            'funcionary_id' => 34,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'observations' => 'Sin observaciones'
        ]);
        //41
        Device::create([
            'funcionary_id' => 35,
            'ubication_id' => 2,
            'dependence_id' => 7,
            'element_id' => 1,
            'description' => 'PC CLON  CPU Intel ® Core ™ 2 Duo 2.93 GHz, Disco Duro 500 Gb, Memoria Ram 2 Gb,  Monitor ACER Modelo X173W Serial: ETLAL0800481901BB74201, Teclado Genius Modelo KUO138, Mouse Genius Modelo GM-03022P',
            'status' => 'BUENO',
            'cost' => '400000',
            'datebuy' => '2010-09-08', 
            'initoperation' => '2010-09-08', 
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ200212000111',
            'code' => '0391',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 41,
            'funcionary_id' => 35,
            'ubication_id' => 2,
            'dependence_id' => 7,
            'observations' => 'Sin observaciones'
        ]);
        //42
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 25,
            'element_id' => 1,
            'description' => 'Computador LENOVO MT-M 10B7 - A1YG00 Serial MJ03LRYN, CPU INTEL CORE I7 3,60, Memoria RAM 4,00 GB, Monitor Lenovo Serial V5758175 Modelo 60AB-AAR1-WW',
            'status' => 'BUENO',
            'cost' => '4800000',
            'datebuy' => '2016-08-01', 
            'initoperation' => '2016-08-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ03LRYN',
            'code' => '2565',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 42,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 25,
            'observations' => 'Sin observaciones'
        ]);
        //43
        Device::create([
            'funcionary_id' => 6,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'element_id' => 1,
            'description' => 'Computador clon serial AJ2002403000092 CPU Intel ® Core ™ i3 3,19 Ghz, Disco Duro 500 Gb, Memoria Ram 2,00 GB, Monitor Samsung Modelo S19A300B serial ZBBNH9NB202090N, Teclado Genius Modelo KU-0138, Mouse Genius Modelo GM-120014',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2011-05-02', 
            'initoperation' => '2011-05-02', 
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ2002403000092',
            'code' => '2311',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 43,
            'funcionary_id' => 6,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'observations' => 'Sin observaciones'
        ]);
        //44
        Device::create([
            'funcionary_id' => 29,
            'ubication_id' => 1,
            'dependence_id' => 11,
            'element_id' => 1,
            'description' => 'Portatil Lenovo ThinkPad E440, Serial PF01NCDC, Memoria RAM 4Gb, Disco Duro 500 Gb Serial Ata, CPU INTEL CORE i5 2,50 GHz. ',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-09-25', 
            'initoperation' => '2014-09-25', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PF01NCDC',
            'code' => '0170',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 44,
            'funcionary_id' => 29,
            'ubication_id' => 1,
            'dependence_id' => 11,
            'observations' => 'Sin observaciones'
        ]);
        //45
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 36,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10B7-0029LS Serial MJ004CH9, Intel ® Core ™ i5 , Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS2023WC Serial VN90059, Teclado Lenovo KU-0025 Serial 5528978, Mouse Lenovo Modelo MOEUUO Serial 44vve067',
            'status' => 'BUENO',
            'cost' => '2497500',
            'datebuy' => '2014-02-28', 
            'initoperation' => '2014-02-28', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ004CH9',
            'code' => '0790',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 45,
            'funcionary_id' => 36,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //46
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 37,
            'ubication_id' => 1,
            'dependence_id' => 25,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 3664-A5S Serial MJ455TK, PC LENOVO CPU Intel ® Core ™ i5 3,20 Gb, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS1922WA serial V3VR938, Teclado Lenovo KU0225 serial 6565909, Mouse HP Modelo M-0031-O',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-09-19', 
            'initoperation' => '2013-09-19', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455TK',
            'code' => '00547',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 46,
            'funcionary_id' => 37,
            'ubication_id' => 1,
            'dependence_id' => 25,
            'observations' => 'Sin observaciones'
        ]);
        //47
        Device::create([
            'funcionary_id' => 16,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador LENOVO MT-M 1652-R4S Serial PBLFA51, CPU Intel ® Core ™ i3 3.40 Ghz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS1922WA serial V3VR880, Teclado ACER Modelo KB36215, Mouse ACER Modelo SM-9020',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-01-30', 
            'initoperation' => '2013-01-30', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFA51',
            'code' => '2308',
            'observations' => 'Equipo usado por el Jefe de facturación'
        ]);
        Traceability::create([
            'device_id' => 47,
            'funcionary_id' => 16,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //48
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 26,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU-003SLS Serial PB0254Y3, CPU Intel Core i5, Monitor Lenovo 03T8464 Serial V5035192, Teclado Logitech k120, Mouse Lenovo MU-0025-O, CPU INTEL CORE I5, Memoria RAM 4Gb, Disco Duro 500Gb',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-09-15', 
            'initoperation' => '2014-09-15', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB0254Y3',
            'code' => '0173',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 48,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 26,
            'observations' => 'Sin observaciones'
        ]);
        //49
        Device::create([
            'mant'=>'ok',
            'funcionary_id' => 38,
            'ubication_id' => 1,
            'dependence_id' => 27,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 1652-R4S Serial PBLFA31, CPU Intel ® Core ™ i3 3,40 GHZ, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA V1VAD08 ,  Teclado Lenovo  Modelo SK8821, Mouse Lenovo',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-04', 
            'initoperation' => '2012-09-04', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFA31',
            'code' => '0561',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 49,
            'funcionary_id' => 38,
            'ubication_id' => 1,
            'dependence_id' => 27,
            'observations' => 'Sin observaciones'
        ]);
        //50
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 39,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 3664-A5S Serial MJ455TH, INTEL ® CORE ™ I5, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS1922WA Serial V3VR925, Teclado Genius Modelo K639, Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-12-03', 
            'initoperation' => '2013-12-03', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455TH',
            'code' => '0344',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 50,
            'funcionary_id' => 39,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //51
        Device::create([
            'mant'=>'ok',
            'funcionary_id' => 40,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU-A00Y00 Serial PB02WOMR, CPU CORE I5 2,70 GHz, Disco Duro 500 Gb, Memoria Ram 4 Gb, Bios Lenovo FCKT46AUS, Monitor Lenovo Modelo 03T8464 Serial V3034894, Teclado Lenovo Modelo KU-0025 Serial 6706495, Mouse Lenovo Modelo MOEUUO Serial 44Z9186',
            'status' => 'BUENO',
            'cost' => '2587477',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB02WOMR',
            'code' => '0847',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 51,
            'funcionary_id' => 40,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //52
        Device::create([
            'mant'=>'ok',
            'funcionary_id' => 41,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador LENOVO THINKCENTRE MT-M 10B7 A1YG00 Serial MJ03LRX6, CPU INTEL COREI7 3,60 GHz, Memoria RAM 4,00 GB, Disco duro 500 GB, Monitor LENOVO MTM 60AB-AAR1-WW Serial V5668510, Mouse Lenovo, teclado Lenovo.',
            'status' => 'BUENO',
            'cost' => '4800000',
            'datebuy' => '2016-08-01', 
            'initoperation' => '2016-08-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ03LRX6',
            'code' => '2467',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 52,
            'funcionary_id' => 41,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //53
        Device::create([
            'funcionary_id' => 42,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Lenovo INTEL CORE i5 MT-M 10AU - 003SLS Serial PB025AXV, Disco Duro 500Gb, Memoria RAM 4Gb, Monitor placa 00314',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-09-15', 
            'initoperation' => '2014-09-15', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB025AXV',
            'code' => '0178',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 53,
            'funcionary_id' => 42,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //54
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 43,
            'ubication_id' => 1,
            'dependence_id' => 20,
            'element_id' => 1,
            'description' => 'ACER PLACA 0375 Serial PTSHVP9003139064AF3000, CPU Intel ® Core ™ i3 3,10 GHz, Memoria Ram 4,00 Gb, Unidad de DVD ATA DEVICE, Monitor Hacer Modelo S181HL Serial ETLRF0D00433082388526, Teclado Genius Modelo K-639 Sin serial, Mouse Lenovo Modelo MOEUUOA Serial LZ210AV0810W',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-06-20', 
            'initoperation' => '2012-06-20', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => 'PTSHVP9003139064AF3000',
            'code' => '0375',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 54,
            'funcionary_id' => 43,
            'ubication_id' => 1,
            'dependence_id' => 20,
            'observations' => 'Sin observaciones'
        ]);
        //55
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 44,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU-A00Y00 Serial PB02W0PF, CPU INTEL ® CORE ™ I5-4430S 2,70 GHz, Disco Duro 500 Gb st500dm002-1bd142, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo 03T8484 Serial V5035102, Teclado KU-0225 Serial 6707343, Mouse Lenovo Modelo KU-0225 Serial 6707343, Mouse Lenovo Modelo MOEUUOA Serial 44H8706',
            'status' => 'BUENO',
            'cost' => '2981693',
            'datebuy' => '2015-06-19', 
            'initoperation' => '2015-06-19', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB02W0PF',
            'code' => '0846',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 55,
            'funcionary_id' => 44,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //56
        Device::create([
            'funcionary_id' => 14,
            'ubication_id' => 2,
            'dependence_id' => 27,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 1652-R4S Serial PBHGN65, LENOVO CPU Intel ® Core ™ i3 3,40 GHz,  Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo D186WA  Serial V1NBL50, Teclado JYR Modelo TMJR-004, Mouse Unitec (Sin modelo)',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-10-05', 
            'initoperation' => '2012-10-05', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGN65',
            'code' => '0601',
            'observations' => 'El equipo se encuentra en la oficina de vacunación a un costado de la granja'
        ]);
        Traceability::create([
            'device_id' => 56,
            'funcionary_id' => 14,
            'ubication_id' => 2,
            'dependence_id' => 27,
            'observations' => 'Sin observaciones'
        ]);
        //57
        Device::create([
            'funcionary_id' => 14,
            'ubication_id' => 2,
            'dependence_id' => 27,
            'element_id' => 1,
            'description' => 'Computador LENOVO MT-M 3664-A5S Serial MJ455XV, CPU Intel ® Core ™ i5 3,20 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS1922WA Serial V3VR920, Teclado Lenovo Modelo KU-0225, Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-09-05', 
            'initoperation' => '2013-09-05', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455XV',
            'code' => '0597',
            'observations' => 'El equipo se encuentra en la oficina de vacunación a un costado de la granja'
        ]);
        Traceability::create([
            'device_id' => 57,
            'funcionary_id' => 14,
            'ubication_id' => 2,
            'dependence_id' => 27,
            'observations' => 'Sin observaciones'
        ]);
        //58
        Device::create([
            'funcionary_id' => 45,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador LENOVO serial PBLFB40, CPU Intel ® Core ™ i3 3,40 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA V1C75, Teclado Genius Modelo K639, Mouse Lenovo Modelo MU0025-O',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-10-08', 
            'initoperation' => '2013-10-08', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFB40',
            'code' => '0535',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 58,
            'funcionary_id' => 45,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //59
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 17,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador Lenovo R4s Serial PBLFA34, CPU Intel ® Core ™ i3 3,40 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo D186WA serial V1NBL13, Teclado Genius Modelo K639, Mouse Genius Modelo GM-110020',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-04', 
            'initoperation' => '2012-09-04', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFA34',
            'code' => '0541',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 59,
            'funcionary_id' => 17,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //60
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador Lenovo thinkcentre mt-m 1652 - R4S, Serial PBHGN42, CPU INTEL CORE I3 3,40 GHz, Disco Duro 500 GB, Memoria Ram 4,00 GB, Monitor  acer s181hl Placa 00607 Serial ETLRF0D00113307F978526 ',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2012-09-05', 
            'initoperation' => '2012-09-05', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGN42',
            'code' => '00611',
            'observations' => 'Equipo ubicado en el área de facturación de la granja'
        ]);
        Traceability::create([
            'device_id' => 60,
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //61
        Device::create([
            'funcionary_id' => 46,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Lenovo modelo MT-M 3664 - A5S Serial MJ455WC, CPU Intel ® Core ™ i5-3470 3.20 Ghz. Disco Duro 500 Gb, Memoria Ram 4,00 gb, Monitor Compaq Modelo CQ1569 serial CNC914PLLF, Teclado Logitech Modelo YU0009, Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-09-03', 
            'initoperation' => '2013-09-03', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455WC',
            'code' => '1172',
            'observations' => 'Equipo de tuberculosis'
        ]);
        Traceability::create([
            'device_id' => 61,
            'funcionary_id' => 46,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //62
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 47,
            'ubication_id' => 1,
            'dependence_id' => 24,
            'element_id' => 1,
            'description' => 'PC LENOVO THINKCENTRE serial: PC02RMSH, MONITOR Lenovo Modelo 03T8464 Serial: V5678651, Teclado Lenovo Modelo KU-0225 Serial 7471362, Mouse Lenovo Modelo MSU1175 Serial 4L450B2673B, UPS Marca CDP Modelo R-UPR754 Serial 14118-0660387, Disco duro 500 Gb Serial ATA device, Intel(r) Core (tm) i5, Memoria Ram 4,00 Gb',
            'status' => 'BUENO',
            'cost' => '2535727',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PC02RMSH',
            'code' => '0980',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 62,
            'funcionary_id' => 47,
            'ubication_id' => 1,
            'dependence_id' => 24,
            'observations' => 'Sin observaciones'
        ]);
        //63
        Device::create([
            'funcionary_id' => 48,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'element_id' => 1,
            'description' => 'ACER AX1430-SD31F TORRE SERIAL: PTSE8P005141087F2300, MONITOR ACER Modelo S181HL Serial ETLRF0D00113307ECE8526, CPU AMD E-450 ADU WITH ™ HD GRAPHICS 1.65 GHz, Memoria RAM 4 Gb, Teclado ACER Modelo KB36211 Serial KBUSB0P0831388009B0K701, Mouse Genius Modelo GM-120014 Serial X4E87619408456, Parlantes Genius Modelo SPS 110 Serial ZF042B040607, UPS CDP Modelo SP-S110 Serial 131202-0571634',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => 'PTSE8P005141087F2300',
            'code' => '2329',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 63,
            'funcionary_id' => 48,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'observations' => 'Sin observaciones'
        ]);
        //64
        Device::create([
            'funcionary_id' => 49,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'element_id' => 1,
            'description' => 'PC LENOVO CPU Intel ® Core ™ i5 3,20 Gb, serial MJ455ZW, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS1922WA serial V3VR905, Teclado Lenovo SK8825(L) serial 0728038, Mouse Lenovo Modelo MOEUUO serial 4415790',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2013-09-03', 
            'initoperation' => '2013-09-03', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455ZW',
            'code' => '01003',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 64,
            'funcionary_id' => 49,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'observations' => 'Sin observaciones'
        ]);
        //65
        Device::create([
            'funcionary_id' => 50,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'element_id' => 1,
            'description' => 'Computador LENOVO MT-M 3598-A7S Serial MJYMCBE, INTEL ® CORE ™ I3, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo Modelo LS1922WA Serial V375462, Teclado Lenovo Modelo SK-8821 Serial 0100618, Mouse Lenovo Modelo MO-0025-O Serial LZ237AV02K0',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-05-17', 
            'initoperation' => '2013-05-17', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJYMCBE',
            'code' => '03104',
            'observations' => 'Placa anterior 0782'
        ]);
        Traceability::create([
            'device_id' => 65,
            'funcionary_id' => 50,
            'ubication_id' => 1,
            'dependence_id' => 10,
            'observations' => 'Sin observaciones'
        ]);
        //66
        Device::create([
            'funcionary_id' => 51,
            'ubication_id' => 1,
            'dependence_id' => 19,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 3598-A7S Serial MJYMDAK, PC LENOVO CPU Intel ® Core ™ i3 3,30 GHZ, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Lenovo LS1922WA Serial V366564, Teclado Lenovo Modelo SK-8825(L), Mouse Unitec, ups Nicomar',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-05-17', 
            'initoperation' => '2013-05-17', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJYMDAK',
            'code' => '0552',
            'observations' => 'Atención al usuario segundo piso'
        ]);
        Traceability::create([
            'device_id' => 66,
            'funcionary_id' => 51,
            'ubication_id' => 1,
            'dependence_id' => 19,
            'observations' => 'Sin observaciones'
        ]);
        //67
        Device::create([
            'funcionary_id' => 52,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'serial AJ2002403000088, CPU Intel ® Core ™ i3 3,20 GHz, Disco Duro 500 Gb, Memoria Ram 2,00 Gb, Monitor Samsung Modelo 819A300B, Teclado Genius Modelo KU-0138, Mouse Genius Modelo NetScroll 120',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-05-17', 
            'initoperation' => '2013-05-17', 
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ2002403000088',
            'code' => '02306',
            'observations' => 'Usado por la secretaria Científico Técnico'
        ]);
        Traceability::create([
            'device_id' => 67,
            'funcionary_id' => 52,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
         //68
         Device::create([
            'mant' => 'ok',
            'funcionary_id' => 53,
            'ubication_id' => 1,
            'dependence_id' => 20,
            'element_id' => 1,
            'description' => 'Computador COMPAQ PRESARIO SR1703LS Serial MXK6200D95, CPU INTEL ® PENTIUM® 4 2,93 GHz, monitor LENOVO D186WA Serial V1VAY56',
            'status' => 'BUENO',
            'cost' => '0',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => 'MXK6200D95',
            'code' => '3136',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 68,
            'funcionary_id' => 53,
            'ubication_id' => 1,
            'dependence_id' => 20,
            'observations' => 'Sin observaciones'
        ]);
          //69
          Device::create([
            'mant' => 'ok',
            'funcionary_id' => 54,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'element_id' => 1,
            'description' => 'Computador HP Compaq pro 4300 Serial MXL3360H73, INTEL ® core ™ i5 2,90 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor HP Modelo HPVLV.1911 Serial 6CM33126ZB, Teclado HP Modelo KB-0316 Serial BDAEV0Q5Y4Y369, Mouse Hp Modelo M0FXKO Serial FC6LH0D9W4V1M7',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-05-22', 
            'initoperation' => '2014-05-22', 
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => 'MXL3360H73',
            'code' => '0774',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 69,
            'funcionary_id' => 54,
            'ubication_id' => 1,
            'dependence_id' => 23,
            'observations' => 'Sin observaciones'
        ]);
        //70
        Device::create([
            'funcionary_id' => 66,
            'ubication_id' => 6,
            'dependence_id' => 33,
            'element_id' => 1,
            'description' => 'Portátil HP EliteBook 8440p - 14" - Serial CZO103D09D Core i5 520M - Windows 7 Pro - 4 GB RAM - 250 GB HDD Series',
            'status' => 'BUENO',
            'cost' => '1600000',
            'datebuy' => '2017-08-04', 
            'initoperation' => '2017-08-04', 
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => 'CZO103D09D',
            'code' => '03088',
            'observations' => 'Equipo recibido como donación'
        ]);
        Traceability::create([
            'device_id' => 70,
            'funcionary_id' => 66,
            'ubication_id' => 6,
            'dependence_id' => 33,
            'observations' => 'Lo tuvo anteriormente Yenny Amaya siendo secretaria de Subgerencia adm.'
        ]);
        //71
        Device::create([
            'mant'=> 'ok',
            'funcionary_id' => 56,
            'ubication_id' => 1,
            'dependence_id' => 15,
            'element_id' => 1,
            'description' => 'Compuitador LENOVO MT-M 10B7-A1YG00 Serial MJ03LRWC, CPU INTEL CORE I7 3,60 GHz, memoria RAM 4,00 GB, MONITOR Lenovo Modelo 60AB-AAR1-WW Serial V5670228',
            'status' => 'BUENO',
            'cost' => '4800000',
            'datebuy' => '2016-08-01', 
            'initoperation' => '2016-08-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ03LRWC',
            'code' => '2563',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 71,
            'funcionary_id' => 56,
            'ubication_id' => 1,
            'dependence_id' => 15,
            'observations' => 'Sin observaciones'
        ]);
        //72
        Device::create([
            'mant'=> 'ok',
            'funcionary_id' => 56,
            'ubication_id' => 1,
            'dependence_id' => 15,
            'element_id' => 1,
            'description' => 'LENOVO Thinkcentre Edge 71 modelo R4s Serial PBHGM29, Ram 4Gb, CPU intel core i3, monitor Lenovo modelo d186wa serial V1VAY52',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-10-08', 
            'initoperation' => '2013-10-08', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM29',
            'code' => '2598',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 72,
            'funcionary_id' => 56,
            'ubication_id' => 1,
            'dependence_id' => 15,
            'observations' => 'Sin observaciones'
        ]);
        //73
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 13,
            'ubication_id' => 1,
            'dependence_id' => 24,
            'element_id' => 1,
            'description' => 'Computador Lenovo THINKCENTRE MT-M 10B7 - A1YG00, Serial MJ03LRY9, CPU INTEL CORE I3, MEMORIA 4,00 GB, DISCO DURO 500 GB, Monitor lenovo MTM 60AB-AAR1-WW Serial V5668722',
            'status' => 'BUENO',
            'cost' => '4800000',
            'datebuy' => '2016-08-01', 
            'initoperation' => '2016-08-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ03LRY9',
            'code' => '2469',
            'observations' => 'Usado por Carolina y se encuentra en la misma oficina de Científico Ténico'
        ]);
        Traceability::create([
            'device_id' => 73,
            'funcionary_id' => 13,
            'ubication_id' => 1,
            'dependence_id' => 24,
            'observations' => 'Sin observaciones'
        ]);
        //74
        Device::create([
            'funcionary_id' => 57,
            'ubication_id' => 3,
            'dependence_id' => 20,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10B7-0029LS Serial MJ004CJU, Monitor Lenovo Modelo LS2023WC Serial VN89779, Teclado Lenovo KU-0225, Mouse Lenovo Modelo MOEUUO+, CPU INTEL CORE I5, Memoria RAM 4Gb, Disco Duro 500 Gb.',
            'status' => 'BUENO',
            'cost' => '2497500',
            'datebuy' => '2014-02-28', 
            'initoperation' => '2014-02-28', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ004CJU',
            'code' => '0792',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 74,
            'funcionary_id' => 57,
            'ubication_id' => 3,
            'dependence_id' => 20,
            'observations' => 'Sin observaciones'
        ]);
        //75
        Device::create([
            'funcionary_id' => 57,
            'ubication_id' => 3,
            'dependence_id' => 20,
            'element_id' => 1,
            'description' => 'EQUIPO CLON Serial AJ2002122000102 PLACA 0372, CPU Intel ® Core ™ Duo 2,93 GHz, Memoria Ram 2,00 Gb, Disco Duro 500 Gb, Unidad de DVD ATA DEVICE, Monitor Hacer Modelo X183HB Serial ETLEL0D003008170, Teclado Genius Modelo KU-0138 Serial ZCE191900624, Mouse Genius Modelo Netscroll120 Serial 16425600834.',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2010-09-15', 
            'initoperation' => '2010-09-15', 
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ2002122000102',
            'code' => '0372',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 75,
            'funcionary_id' => 57,
            'ubication_id' => 3,
            'dependence_id' => 20,
            'observations' => 'Sin observaciones'
        ]);
        //76
        Device::create([
            'funcionary_id' => 58,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'element_id' => 1,
            'description' => 'COMPUTADOR COMPAQ PRESARIO DE ESCRITORIO CQ5105LA, PROCESADOR AMD ATLON, MEMEORIA DE 2GB, DISCO DURO DE 250 MB QUEMADOR DE CD Y DVD, WINDOWS VISTA  SERIE; 4CE9290PKB PLACA INTERNA 2777',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2009-11-13', 
            'initoperation' => '2009-11-13', 
            'usefullife' => '5',
            'brand_id' => 3,
            'serial' => '4CE9290PKB',
            'code' => '0087',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 76,
            'funcionary_id' => 58,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'observations' => 'Sin observaciones'
        ]);
        //77
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 3664-A5S Serial MJ455ZL, Monitor Lenovo Modelo LS1922WA Serial V3VR924, CPU INTEL CORE i5, Disco Duro 500Gb, Memoria RAM 4Gb',
            'status' => 'BUENO',
            'cost' => '0',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ455ZL',
            'code' => '0752',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 77,
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //78
        Device::create([
            'funcionary_id' => 59,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Inspiron One W03C Serial 7ZQ9Q1, CPU Intel ® Core ™ i3 3,10 GHz, Disco Duro 1 Tb, Memoria Ram 4,00 Gb, Monitor Dell Modelo W03C Serial CN-0R07JT567321851KEM, Teclado Dell Modelo KG-1089, Mouse Dell Modelo MG-1090',
            'status' => 'BUENO',
            'cost' => '1300000',
            'datebuy' => '2013-12-13', 
            'initoperation' => '2013-12-13', 
            'usefullife' => '5',
            'brand_id' => 10,
            'serial' => '7ZQ9Q1',
            'code' => '00663',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 78,
            'funcionary_id' => 59,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'observations' => 'Sin observaciones'
        ]);
        //79
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 60,
            'ubication_id' => 1,
            'dependence_id' => 16,
            'element_id' => 1,
            'description' => 'Portátil HP EliteBook 8440p - 14" - Serial CNV310COCK Core i5 520M - Windows 7 Pro - 4 GB RAM - 250 GB HDD Series',
            'status' => 'BUENO',
            'cost' => '1600000',
            'datebuy' => '2017-08-04', 
            'initoperation' => '2017-08-04', 
            'usefullife' => '5',
            'brand_id' => 3,
            'acquisition' =>'DONACIÓN',
            'serial' => 'CNV310COCK',
            'code' => '3089',
            'observations' => 'Auxiliar de saneamiento'
        ]);
        Traceability::create([
            'device_id' => 79,
            'funcionary_id' => 60,
            'ubication_id' => 1,
            'dependence_id' => 21,
            'observations' => 'Sin observaciones'
        ]);
        //80
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU-003SLS Serial PB0254XN, CPU INTEL CORE I5, Memoria RAM 4Gb, Disco Duro 500 Gb, Monitor Lenovo 03T8464 Serial V5034765',
            'status' => 'BUENO',
            'cost' => '0',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB0254XN',
            'code' => '0177',
            'observations' => 'Prestado en enero por pic-municipal, usado por Karen Alvarez en faturación Unidad San José'
        ]);
        Traceability::create([
            'device_id' => 80,
            'funcionary_id' => 5,
            'ubication_id' => 1,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //81
        Device::create([
            'funcionary_id' => 23,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'element_id' => 1,
            'description' => 'CPU Serial AJ2002403000076, Intel ® Core ™ i3 3,46 GHz, Disco Duro 500 Gb, Memoria Ram 2,00 Gb, Monitor Samsung Modelo S19A300B serial ZBBNH9NB202118T, Teclado Genius Modelo KU-138 serial ZCE0C4506479, Mouse Genius Modelo NetScroll120',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2011-05-02', 
            'initoperation' => '2011-05-02', 
            'usefullife' => '5',
            'brand_id' => 6,
            'serial' => 'AJ2002403000076',
            'code' => '01170',
            'observations' => 'Usado por axiliar de talento humano'
        ]);
        Traceability::create([
            'device_id' => 81,
            'funcionary_id' => 23,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'observations' => 'Sin observaciones'
        ]);
        //82
        Device::create([
            'funcionary_id' => 6,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 1652-R4S Serial PBLFB52, CPU INTEL CORE i3, Disco Duro 500 Gb, Memoria RAM 4Gb, Monitor Lenovo D186wa Serial V1VAC43',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-11-23', 
            'initoperation' => '2012-11-23', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFB52',
            'code' => '0755',
            'observations' => 'Usado por Rodrigo Miranda en seguida de la oficina de Milton Cuellar. Prestado por el pic Municipal -Anayiber comba'
        ]);
        Traceability::create([
            'device_id' => 82,
            'funcionary_id' => 6,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'observations' => 'Sin observaciones'
        ]);
        //83
        Device::create([
            'funcionary_id' => 61,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'element_id' => 1,
            'description' => 'Computador LENOVO Modelo MT-M 3598-A7S Serial MJYMCCB, CPU Intel ® Core ™ i3 3,30 GHz, Disco Duro 500 Gb, Memoria Ram 4 Gb, Monitor Lenovo Modelo LS1922WA Serial V375463, Teclado Lenovo Modelo KU-0225, Mouse Lenovo Modelo MU-0025',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-05-17', 
            'initoperation' => '2013-05-17', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJYMCCB',
            'code' => '2315',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 83,
            'funcionary_id' => 61,
            'ubication_id' => 2,
            'dependence_id' => 4,
            'observations' => 'Sin observaciones'
        ]);
        //84
        Device::create([
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 29,
            'element_id' => 1,
            'description' => 'LENOVO INTEL COREI7, Serial  MJ03LRW6, Memoria RAM 4,00 GB, Disco Duro 500 gb.',
            'status' => 'BUENO',
            'cost' => '4800000',
            'datebuy' => '2016-08-01', 
            'initoperation' => '2016-08-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJ03LRW6',
            'code' => '02561',
            'observations' => 'Usado por Carlos Ararát'
        ]);
        Traceability::create([
            'device_id' => 84,
            'funcionary_id' => 5,
            'ubication_id' => 2,
            'dependence_id' => 29,
            'observations' => 'Sin observaciones'
        ]);
        //85
        Device::create([
            'funcionary_id' => 62,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'element_id' => 1,
            'description' => 'Lenovo MT-M 1652-R4S Serial PBLFB42, CPU Intel ® Core ™ i3 4 Núcleos, Disco Duro 500 Gb, Memoria RAM 4 Gb, unidad de CD-DVD-ram',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-11-23', 
            'initoperation' => '2012-11-23', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBLFB42',
            'code' => '03161',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 85,
            'funcionary_id' => 62,
            'ubication_id' => 2,
            'dependence_id' => 18,
            'observations' => 'Sin observaciones'
        ]);
        //86
        Device::create([
            'funcionary_id' => 63,
            'ubication_id' => 1,
            'dependence_id' => 30,
            'element_id' => 1,
            'description' => 'THINKCENTRE LENOVO MT-M 3598-A7S Serial MJYMCLM, MODELO 3598A75 00350, CPU INTEL ® CORE ™ I3 - 2130 3,30 GHz, memoria Ram 4,00 Gb, Disco Duro 500 Gb WDCWD500AAKX-08ERMAD, Unidad de DVD-RW o CD Multirecorder, Monitor Marca Lenovo Modelo LS1922WA Serial V375266, Teclado Lenovo Modelo KU-0225 Serial 3628056, Mouse Lenovo Modelo M-U0025-O Serial LZ2374316NT.',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2013-05-17', 
            'initoperation' => '2013-05-17', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MJYMCLM',
            'code' => '0350',
            'observations' => 'Usado por el área de odontologia de la unidad San José'
        ]);
        Traceability::create([
            'device_id' => 86,
            'funcionary_id' => 63,
            'ubication_id' => 1,
            'dependence_id' => 30,
            'observations' => 'Sin observaciones'
        ]);
        //87
        Device::create([
            'funcionary_id' => 4,
            'ubication_id' => 1,
            'dependence_id' => 3,
            'element_id' => 1,
            'description' => 'Computador Hp Compaq Serial MXL3360H6Z, CPU Intel ® Core ™ i5 2,90 GHz, Disco Duro 500 Gb, Memoria Ram 4,00 Gb, Monitor Hp LLV9LLMONITOR modelo HSTND-3501-A Serial 6CM33126R4, Teclado Delux (Sin modelo), Mouse Lenovo (Sin modelo)',
            'status' => 'BUENO',
            'cost' => '1500000',
            'datebuy' => '2014-05-22', 
            'initoperation' => '2014-05-22', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'MXL3360H6Z',
            'code' => '0594',
            'observations' => 'Usado por el auxiliar de presupuesto'
        ]);
        Traceability::create([
            'device_id' => 87,
            'funcionary_id' => 4,
            'ubication_id' => 1,
            'dependence_id' => 3,
            'observations' => 'Sin observaciones'
        ]);
        //-------------------------------------------RETORNO
        //88
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 27,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PWLJ',
            'code' => '02748',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 88,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 27,
            'observations' => 'Sin observaciones'
        ]);
        //89
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 20,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PVZ8',
            'code' => '02746',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 89,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 20,
            'observations' => 'Sin observaciones'
        ]);
        //90
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 31,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PW0A',
            'code' => '02742',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 90,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 31,
            'observations' => 'Sin observaciones'
        ]);
        //91
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 9,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PW1H',
            'code' => '02743',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 91,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 9,
            'observations' => 'Sin observaciones'
        ]);
        //92
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PW4Y',
            'code' => '02745',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 92,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //93
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 5,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PWJ5',
            'code' => 'Verificar placa de equipo',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 93,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 5,
            'observations' => 'Sin observaciones'
        ]);
        //94
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 15,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PWL2',
            'code' => '02736',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 94,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 15,
            'observations' => 'Sin observaciones'
        ]);
        //95
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 32,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PW5E',
            'code' => '02735',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 95,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 32,
            'observations' => 'Sin observaciones'
        ]);
        //96
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 33,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PW3Q',
            'code' => '02747',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 96,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 33,
            'observations' => 'Sin observaciones'
        ]);
        //97
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO Lenovo C40-30, CPU INTEL® CORE™ I5 5200U 2,20 GHz, disco duro de 1TB Serial ATA, memoria RAM de 4GB, DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'DONACIÓN',
            'cost' => '4142048',
            'datebuy' => '2016-09-21', 
            'initoperation' => '2016-09-21', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'P900PWL9',
            'code' => '02749',
            'observations' => 'Donado por alcaldía municipal de El Retorno 2016'
        ]);
        Traceability::create([
            'device_id' => 97,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'observations' => 'Sin observaciones'
        ]);
        //98
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU - A00Y00, CPU INTEL ® core ™ i5 2,70 GHz, memoria RAM 4GB, disco duro 500 GB Serial ATA, unidad de DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '2587477',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB02W0QS',
            'code' => '0866',
            'observations' => 'Equipo de cómputo usado como Servidor de la unidad'
        ]);
        Traceability::create([
            'device_id' => 98,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'observations' => 'Sin observaciones'
        ]);
        //99
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 27,
            'element_id' => 1,
            'description' => 'COMPUTADOR TODO EN UNO, PC SMAR, WINDOWS 8,1 CON PROCESADOR INTEL CORE I 3 4150 CPU 3,5 GHZ DISCO DURO DE 500GB MEMORIA RAM DE 4 GB SERIAL P2957011500305  MODELO AIOGOB21',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '2136106',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 8,
            'serial' => 'P2957011500305',
            'code' => '01159',
            'observations' => 'Equipo de cómputo usado en vacunación por Maria Florido'
        ]);
        Traceability::create([
            'device_id' => 99,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 27,
            'observations' => 'Sin observaciones'
        ]);
        //100
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 26,
            'element_id' => 1,
            'description' => 'Computador TODO EN UNO DELL INPIRON 2320, Intel ® Core ™ i3 3,10 GHz, disco duro 1 TB Serial ATA, memoria RAM 4 GB, unidad de DVD-RW',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '1300000',
            'datebuy' => '2013-12-13', 
            'initoperation' => '2013-12-13', 
            'usefullife' => '5',
            'brand_id' => 10,
            'serial' => '4ZOQ9C1',
            'code' => '2906',
            'observations' => 'Equipo de cómputo usado por Steewarth Espitia'
        ]);
        Traceability::create([
            'device_id' => 100,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 26,
            'observations' => 'Sin observaciones'
        ]);
        //101
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 34,
            'element_id' => 1,
            'description' => 'Computador Lenovo MT-M 10AU - A00Y00, CPU INTEL ® core ™ i5 2,70 GHz, disco duro 500 GB Serial ATA, memoria RAM 4GB',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '2587477',
            'datebuy' => '2016-06-01', 
            'initoperation' => '2016-06-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PB02WOMQ',
            'code' => '0859',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 101,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 34,
            'observations' => 'Sin observaciones'
        ]);
        //102
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 32,
            'element_id' => 1,
            'description' => 'Computador JANUS CPU INTEL ® CORE ™ I5 3,00 GHz, disco duro 500GB, memoria RAM 4GB',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '800000',
            'datebuy' => '2014-01-28', 
            'initoperation' => '2014-01-28', 
            'usefullife' => '5',
            'brand_id' => 11,
            'serial' => '131210222259',
            'code' => '2926',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 102,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 32,
            'observations' => 'Sin observaciones'
        ]);
        //103
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 31,
            'element_id' => 1,
            'description' => 'EQUIPO DE COMPUTO DE ESCRITORIO PROCESADOR INTEL CORE i5, RAM 4GB, DISCO 1TB,  CPU:131210222258,  MONITOR: ZXTMH4LD807419V',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '800000',
            'datebuy' => '2014-01-28', 
            'initoperation' => '2014-01-28', 
            'usefullife' => '5',
            'brand_id' => 11,
            'serial' => '131210222258',
            'code' => '2896',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 103,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 31,
            'observations' => 'Sin observaciones'
        ]);
        //104
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'element_id' => 1,
            'description' => 'Lenovo MT-M 1652 - R4S, INTEL ® CORE ™ I3 3,40 GHz, disco duro de 500 GB Serial ATA, memoria RAM 4GB',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '800000',
            'datebuy' => '2012-09-03', 
            'initoperation' => '2012-09-03', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBMBG38',
            'code' => '2900',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 104,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'observations' => 'Sin observaciones'
        ]);
        //105
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'element_id' => 1,
            'description' => 'COMPUTADOR MINITORRE  MARCA ACER SERIE Nº  PTSHVP9003139065393000 PROCESADOR INTEL CORE i5 3GHZ MEMORIA RAM  4 GB',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '1500000',
            'datebuy' => '2012-06-20', 
            'initoperation' => '2012-06-20', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => 'PTSHVP9003139065393000',
            'code' => '2940',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 105,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 25,
            'observations' => 'Sin observaciones'
        ]);
        //106
        Device::create([
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 34,
            'element_id' => 1,
            'description' => 'COMPUTADOR MINITORRE  MARCA ACER SERIE Nº  PTSHVP9003139064273000  MODELO PROCESADOR  AAMD fusion  E-450 DUAL CORE 1. 60 GHZ MEMORIA RAN  4 GB ',
            'status' => 'BUENO',
            'acquisition' => 'COMPRA',
            'cost' => '400000',
            'datebuy' => '2012-06-20', 
            'initoperation' => '2012-06-20', 
            'usefullife' => '5',
            'brand_id' => 7,
            'serial' => 'PTSHVP9003139064273000',
            'code' => '2907',
            'observations' => 'Sin observaciónes'
        ]);
        Traceability::create([
            'device_id' => 106,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 34,
            'observations' => 'Sin observaciones'
        ]);
        //107
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 65,
            'ubication_id' => 1,
            'dependence_id' => 13,
            'element_id' => 1,
            'description' => 'PC LENOVO serial PBHGM45, CPU INTEL® Core ™ i3 3.4 GHz, Disco Duro 500 Gb, Monitor Lenovo Modelo D186WA Serial V1VAC82, Teclado Lenovo Modelo SK-8821, Mouse Lenovo Modelo MOEUUO',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '2012-09-10', 
            'initoperation' => '2012-09-10', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM45',
            'code' => '2405',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 107,
            'funcionary_id' => 65,
            'ubication_id' => 1,
            'dependence_id' => 13,
            'observations' => 'Sin observaciones'
        ]);
        //108
        Device::create([
            'funcionary_id' => 67,
            'ubication_id' => 2,
            'dependence_id' => 7,
            'element_id' => 1,
            'description' => 'Lenovo MT-M 1652-R4S Serial PBHGM58 CPU Intel ® Core ™ I3 3.4 GHz, Disco Duro 500 Gb, Memoria RAM 4,00 Gb, unidad de CD-DVD',
            'status' => 'BUENO',
            'cost' => '1200000',
            'datebuy' => '1900-01-01', 
            'initoperation' => '1900-01-01', 
            'usefullife' => '5',
            'brand_id' => 2,
            'serial' => 'PBHGM58',
            'code' => '2819',
            'observations' => 'No hay observaciónes'
        ]);
        Traceability::create([
            'device_id' => 108,
            'funcionary_id' => 67,
            'ubication_id' => 2,
            'dependence_id' => 7,
            'observations' => 'Sin observaciones'
        ]);
        //109
        Device::create([
            'mant' => 'ok',
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 34,
            'element_id' => 1,
            'description' => 'EQUIPOS DE COMPUTO DE ESCRITORIO PROCESADOR INTEL CORE i5, RAM 4 GB, DISCO 500 GB, PAN: 19"HD, SO WINDOWS 7, VIDEO: 1 GB. QUEMADOR DE CD-DV. MARCA JANUS SERIAL CPU: 131210222287, SERIAL MONITOR: 2XTMH4LD807418 CON MOUSE Y TECLADO',
            'status' => 'BUENO',
            'cost' => '800000',
            'datebuy' => '2014-01-28', 
            'initoperation' => '2014-01-28', 
            'usefullife' => '5',
            'brand_id' => 11,
            'serial' => '131210222287',
            'code' => '2927',
            'observations' => 'Equipo perteneciente al pic municipal de El Retorno'
        ]);
        Traceability::create([
            'device_id' => 109,
            'funcionary_id' => 64,
            'ubication_id' => 4,
            'dependence_id' => 34,
            'observations' => 'Sin observaciones'
        ]);
    }
}
