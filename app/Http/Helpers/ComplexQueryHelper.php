<?php
/**
 * Created by PhpStorm.
 * User: Slamtony
 * Date: 2020/02/12
 * Time: 8:47 PM
 */

namespace App\Http\Helpers;


use App\Documents;
use App\Interests;
use App\PersonalDetails;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ComplexQueryHelper
{
    protected $users;
    protected $personalDetails;

    public function __construct(User $users, PersonalDetails $personalDetails)
    {
        $this->users = $users;
        $this->personalDetails = $personalDetails;
    }

    public static function GeneratePersonalDetails()
    {
        $title      = ['Mr','Mrs','Dr','Pro','Miss'];
        $gender     = ['Male','Female'];
        $countries  = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
        $places     = ["Tokyo","Mexico City","New York City","Mumbai","Seoul", "Shanghai","Lagos","Buenos Aires","Cairo","London"];
        $suburb     = ['Sandton','Rosebank','West Rand','Willow Brook','carnan','Houtrand','Midrand'];



$array = array();
            $a =49;
        for ($i=0; $i <=$a ; $i++) {


                $array[] = array(
                    //
                    'user_id' => random_int(1, $a),
                    'title' => $title[rand(0, 4)],
                    'gender' => $gender[rand(0, 1)],
                    'phone' => "27".Rand(0,123467894744),
                    'country' => $countries[rand(0, 20)],
                    'city' => $places[rand(0, 8)],
                    'suburb' => $suburb[rand(0, 6)],
                    'address' => "brookroad",
                    'postal_code' =>Rand(0,12346),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                );

        }
        DB::table('personal_details')->insert($array);

    }

    public static function GenerateInterest()
    {
        $interest = ['Sport', 'Fishing','Marketing, Sales and Service','Government and Public Administration','Finance','Arts, Audio/Video Technology and Communications','Public Administration','Science', 'Education','Information Technology','Agriculture','Arts','Architecture and Construction','Education and Training','Hospitality and Tourism'];
        $array = array();
            $a = 14;
        for ($i=0; $i <=$a ; $i++){
            $array[] = array(
                'category' => $interest[rand(2, $a)],
                'user_id'=>User::all()->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            );
        }

        DB::table('interests')->insert($array);

    }

    public static function GenerateDocuments()
    {
        $document = ["",'sport','fishing','Education','Information_Technology','Agriculture','Arts','Architecture_and_Construction','Education_and_Training','Hospitality_and_Tourism'];
        $fomart = ['xlsx','csv','txt'];


        $array = array();
        $a = 49;
        for ($i=0; $i <=$a ; $i++){
            $array[] = array(
                'interest_id' => Interests::all()->random()->id,
                'document_name' => $document[rand(2, 9)],
                'file' =>  $random = Str::random(5).".".$fomart[rand(0, 1)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            );
        }
        DB::table('documents')->insert($array);
        }

}







