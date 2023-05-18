<?php

namespace App\Controllers;

class Directory extends BaseController
{
    public function index()
    {
        $data['businessname'] = $this->request->getGet('businessname');
        $data['town'] = $this->request->getGet('town');
        
        $data['celery'] = $this->request->getGet('celery');
        $data['gluten'] = $this->request->getGet('gluten');
        $data['crustaceans'] = $this->request->getGet('crustaceans');
        $data['eggs'] = $this->request->getGet('eggs');
        $data['fish'] = $this->request->getGet('fish');
        $data['lupin'] = $this->request->getGet('lupin');
        $data['milk'] = $this->request->getGet('milk');
        $data['molluscs'] = $this->request->getGet('molluscs');
        $data['mustard'] = $this->request->getGet('mustard');
        $data['nuts'] = $this->request->getGet('nuts');
        $data['peanuts'] = $this->request->getGet('peanuts');
        $data['sesameseeds'] = $this->request->getGet('sesameseeds');
        $data['soya'] = $this->request->getGet('soya');
        $data['sulphurdioxide'] = $this->request->getGet('sulphurdioxide');

        $db = \Config\Database::connect();
        $builder = $db->table('restaraunts');
        $builder->havingLike('RestarauntName', $this->request->getGet('businessname'));
        $builder->havingLike('RestarauntTown', $this->request->getGet('town'));
        $builder->orWhere('RestarauntCelery', $this->request->getGet('celery'));
        $builder->orWhere('RestarauntGluten', $this->request->getGet('gluten'));
        $builder->orWhere('RestarauntCrustaceans', $this->request->getGet('crustaceans'));
        $builder->orWhere('RestarauntEggs', $this->request->getGet('eggs'));
        $builder->orWhere('RestarauntFish', $this->request->getGet('fish'));
        $builder->orWhere('RestarauntLupin', $this->request->getGet('lupin'));
        $builder->orWhere('RestarauntMilk', $this->request->getGet('milk'));
        $builder->orWhere('RestarauntMolluscs', $this->request->getGet('molluscs'));
        $builder->orWhere('RestarauntMustard', $this->request->getGet('mustard'));
        $builder->orWhere('RestarauntNuts', $this->request->getGet('nuts'));
        $builder->orWhere('RestarauntPeanuts', $this->request->getGet('peanuts'));
        $builder->orWhere('RestarauntSesameSeeds', $this->request->getGet('sesameseeds'));
        $builder->orWhere('RestarauntSoya', $this->request->getGet('soya'));
        $builder->orWhere('RestarauntSulphurDioxide', $this->request->getGet('sulphurdioxide'));
        $query = $builder->get();
        $results = $query->getResult();

        $passdata['data'] = $data;
        $passdata['results'] = $results;

        return view('directory/index', $passdata);
    }

    public function viewrestaurant()
    {
        $data['restarauntid'] = $this->request->uri->getSegment(2);
        return view('directory/viewrestaurant', $data);
    }
}

?>