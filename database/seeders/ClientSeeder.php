<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $clients = [
            [
                'name' => 'City of Pharmay Project',
                'client' => 'City of Pharmay Pvt Ltd',
                'capacity' => '5000 Sqm',
                'description' => 'Industrial building Works - Civil, Purchase, Erection, installation and commissioning of Plant and Machinery for City of Pharmay Pvt Ltd',
                'image' => null,
            ],
            [
                'name' => 'KINFRA ETP Augmentation',
                'client' => 'KINFRA (Kerala Industrial Infrastructure Development Corporation)',
                'capacity' => '250 KLD',
                'description' => 'Augmentation of ETP at Rubber Park, Irapuram, Ernakulam - Construction and commissioning of 250cum/day capacity Common Effluent Treatment Plant Equivalent to 1.5 MLD STP',
                'image' => 'clients/kinfra.jpg',
            ],
            [
                'name' => 'ISRO STP Construction',
                'client' => 'Government Of India, Department Of Space, Space Applications Centre',
                'capacity' => '115 KLD',
                'description' => 'Construction of Sewage Treatment Plant (STP) using SBR Technology near existing STP at building No. 37A at SAC, Ahmedabad – Civil works for STP including pumps, diffused air system & filters etc.',
                'image' => null,
            ],
            [
                'name' => 'Sassoon Hospital STP',
                'client' => 'PUNE PUBLIC WORKS DIVISION, PUNE',
                'capacity' => '200 KLD',
                'description' => 'Construction Of 200 KLD Sewage Treatment in the Multistoried Building of Sassoon General Hospital and B. J. Medical College Pune',
                'image' => null,
            ],
            [
                'name' => 'Public Works STP',
                'client' => 'PUBLIC WORKS REGION, PUNE',
                'capacity' => '115 KLD',
                'description' => 'CONSTRUCTION OF 200 KLD SEWAGE TREATMENT IN THE MULTISTORIED BUILDING OF SASSOON GENERAL HOSPITAL AND B. J. MEDICAL COLLEGE PUNE',
                'image' => null,
            ],
            [
                'name' => 'India Security Press ETP',
                'client' => 'Security Printing and Mining Corporation of India Limited, India Security Press, Nashik',
                'capacity' => '50 KLD',
                'description' => 'Design, Supply, Installation, Testing and commissioning of Effluent treatment Plant on turnkey basis',
                'image' => null,
            ],
            [
                'name' => 'SULA Bangalore Plant',
                'client' => 'SULA Vineyards Pvt Ltd',
                'capacity' => '45 KLD',
                'description' => 'Design, Supply, erection, successful commissioning for 45 KLD Winery Effluent treatment Plant at Bangalore Plant',
                'image' => null,
            ],
            [
                'name' => 'SULA Nashik Upgrade',
                'client' => 'SULA Vineyards Pvt Ltd',
                'capacity' => '90 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of primary treatment & sludge handling system for upgradation of 90 KLD Winery Effluent treatment Plant at Nashik Plant',
                'image' => null,
            ],
            [
                'name' => 'SULA Dindori Upgrade',
                'client' => 'SULA Vineyards Pvt Ltd',
                'capacity' => '120 KLD',
                'description' => 'Design of 30 KLD Upflow anaerobic Bioreactor, 120 KLD Membrane Bioreactor and sludge handling system for upgradation of Existing Winery Effluent treatment Plant at Dindori Plant',
                'image' => null,
            ],
            [
                'name' => 'Sun Infrastructure STP',
                'client' => 'Sun Infrastructure Pvt Ltd, Nashik',
                'capacity' => '1000 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of 1000KLD Sewage treatment Plant at Nashik',
                'image' => null,
            ],
            [
                'name' => 'Artisan Spirit ETP',
                'client' => 'Artisan Spirit Pvt Ltd, Nashik',
                'capacity' => '30 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of 30 KLD Effluent treatment Plant at Artisan Spirit Pvt Ltd, Nashik',
                'image' => null,
            ],
            [
                'name' => 'Magnum Heart Institute ETP',
                'client' => 'Magnum Heart Institute, Nashik',
                'capacity' => '27 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of 27KLD Effluent treatment Plant at Nashik',
                'image' => null,
            ],
            [
                'name' => 'Chopda Medicare STP',
                'client' => 'Chopda Medicare & Research Centre Pvt Ltd, Nashik',
                'capacity' => '65 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of 65KLD Sewage treatment Plant at Nashik',
                'image' => null,
            ],
            [
                'name' => 'Nashik Municipal STP Upgrade',
                'client' => 'Nashik Municipal Corporation',
                'capacity' => '130 MLD / 110 MLD',
                'description' => 'DPR preparation for Upgradation of Tapovan & Agartakli STP',
                'image' => null,
            ],
            [
                'name' => 'SMBT Ekdara STP',
                'client' => 'SMBT, Ekdara, Ahmednagar',
                'capacity' => '15 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of package 15 KLD Sewage treatment Plant at Ekdara Hospital of SMBT, Nagar',
                'image' => null,
            ],
            [
                'name' => 'SMBT Pumping Station',
                'client' => 'SMBT, Nandi Hills, Nashik',
                'capacity' => '1500 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of package 1500 KLD Sewage Pumping Station at SMBT, Nashik',
                'image' => null,
            ],
            [
                'name' => 'Suyojit Baug STP',
                'client' => 'Sun Infrastructure Pvt Ltd, Nashik',
                'capacity' => '12 KLD',
                'description' => 'Design, Supply, erection, successful commissioning of package 12 KLD Sewage treatment Plant at Suyojit Baug, Nashik',
                'image' => null,
            ],
            [
                'name' => 'Dombivali MIDC SPS & STP',
                'client' => 'MIDC, Dombivali',
                'capacity' => '4.0 MLD',
                'description' => 'Consultancy Services for preparing Basic engineering package and GA drawing preparation for 4 MLD SPS & STP for Dombivali MIDC, Dombivali',
                'image' => null,
            ],
            [
                'name' => 'Jodhpur Municipal SPS',
                'client' => 'Jodhpur Municipal Corporation, Jodhpur',
                'capacity' => '40.0',
                'description' => 'Consultancy Services for preparing Basic engineering package and GA drawing preparation for 40 MLD SPS for Jodhpur Municipal Corporation, Jodhpur',
                'image' => null,
            ],
            [
                'name' => 'Ambad Municipal STP',
                'client' => 'CIDCO',
                'capacity' => '7.0',
                'description' => 'Consultancy Services for preparing DPR for 7.0 MLD STP for Ambad Municipal Council, Ambad, Jalana',
                'image' => null,
            ],
            [
                'name' => 'Heesargatta STP',
                'client' => 'BWSSB',
                'capacity' => '5.0',
                'description' => 'Consultancy Services for detail engineering of STP for Heesargatta, Banglore drainage scheme.',
                'image' => null,
            ],
            [
                'name' => 'Indapur STP DPR',
                'client' => 'Indapur Municipal Council, Indapur, Pune',
                'capacity' => '6.2',
                'description' => 'Consultancy Services for preparing DPR for Sewage Treatment Plant (STP) of capacity 6.2 MLD for Indapur Underground Sewerage Scheme Dist. Pune',
                'image' => null,
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}