<?php
    namespace App\Repositories;
    use App\Models\Company;

    class CompanyRepository{
        public function company_data(){
           return Company::select('id','name')->orderby('name')->get();
        }
    }
?>
