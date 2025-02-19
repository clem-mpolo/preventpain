<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Models\Comptable;
use Hash;

class ComptableImport implements ToCollection, ToModel
{
    /**
    * @param Collection $collection
    */

    private $current = 0;

    public function collection(Collection $collection)
    {
        
    }

    public function model(array $row)
    {
        
        $this->current++;

        if ($this->current > 1) {
            $count = Comptable::where('nom_complet', 'n', $row[0])->count();
            //dd($count);
            if (empty($count)) {
                $compable = new Comptable;
                $compable->nom_complet = $row[1];
                $compable->fonction = $row[2];
                $compable->nbr_enfant = $row[3];
                $compable->categorie = $row[4];
                $compable->jour = $row[5];
                $compable->taux = $row[6];
                $compable->montant = $row[7];
                $compable->decompte_final = $row[8];
                $compable->bonus = $row[9];
                $compable->prime = $row[10];
                $compable->frais_scolarite = $row[11];
                $compable->heure_supplementaire = $row[12];
                $compable->trezieme_mois = $row[13];
                $compable->avantage_nature = $row[14];
                $compable->alocation_familial = $row[15];
                $compable->logement = $row[16];
                $compable->transport = $row[17];
                $compable->salaire_brut_imposable = $row[18];
                $compable->ipr = $row[19];
                $compable->cnss_qpo = $row[20];
                $compable->total_retenues = $row[21];
                $compable->autre_deduction = $row[22];
                $compable->avance_salaire = $row[23];
                $compable->net_a_payer = $row[24];
                
                $compable->save();
            }
        }
    }
}
