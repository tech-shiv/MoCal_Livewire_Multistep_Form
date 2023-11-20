<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;
    public $countries = [
        ["code" => "af", "flag-class" => "af flag", "name" => "Afghanistan"],
        ["code" => "ax", "flag-class" => "ax flag", "name" => "Aland Islands"],
        ["code" => "al", "flag-class" => "al flag", "name" => "Albania"],
        ["code" => "dz", "flag-class" => "dz flag", "name" => "Algeria"],
        ["code" => "as", "flag-class" => "as flag", "name" => "American Samoa ",],
        ["code" => "ad", "flag-class" => "ad flag", "name" => "Andorra "],
        ["code" => "ao", "flag-class" => "ao flag", "name" => "Angola "],
        ["code" => "ai", "flag-class" => "ai flag", "name" => "Anguilla "],
        ["code" => "ag", "flag-class" => "ag flag", "name" => "Antigua "],
        ["code" => "ar", "flag-class" => "ar flag", "name" => "Argentina "],
        ["code" => "am", "flag-class" => "am flag", "name" => "Armenia "],
        ["code" => "aw", "flag-class" => "aw flag", "name" => "Aruba "],
        ["code" => "au", "flag-class" => "au flag", "name" => "Australia "],
        ["code" => "at", "flag-class" => "at flag", "name" => "Austria "],
        ["code" => "az", "flag-class" => "az flag", "name" => "Azerbaijan "],
        ["code" => "bs", "flag-class" => "bs flag", "name" => "Bahamas "],
        ["code" => "bh", "flag-class" => "bh flag", "name" => "Bahrain "],
        ["code" => "bd", "flag-class" => "bd flag", "name" => "Bangladesh "],
        ["code" => "bb", "flag-class" => "bb flag", "name" => "Barbados "],
        ["code" => "by", "flag-class" => "by flag", "name" => "Belarus "],
        ["code" => "be", "flag-class" => "be flag", "name" => "Belgium "],
        ["code" => "bz", "flag-class" => "bz flag", "name" => "Belize "],
        ["code" => "bj", "flag-class" => "bj flag", "name" => "Benin "],
        ["code" => "bm", "flag-class" => "bm flag", "name" => "Bermuda "],
        ["code" => "bt", "flag-class" => "bt flag", "name" => "Bhutan "],
        ["code" => "bo", "flag-class" => "bo flag", "name" => "Bolivia "],
        ["code" => "ba", "flag-class" => "ba flag", "name" => "Bosnia "],
        ["code" => "bw", "flag-class" => "bw flag", "name" => "Botswana "],
        ["code" => "bv", "flag-class" => "bv flag", "name" => "Bouvet Island "],
        ["code" => "br", "flag-class" => "br flag", "name" => "Brazil "],
        ["code" => "vg", "flag-class" => "vg flag", "name" => "British Virgin Islands",],
        ["code" => "bn", "flag-class" => "bn flag", "name" => "Brunei "],
        ["code" => "bg", "flag-class" => "bg flag", "name" => "Bulgaria "],
        ["code" => "bf", "flag-class" => "bf flag", "name" => "Burkina Faso "],
        ["code" => "mm", "flag-class" => "mm flag", "name" => "Burma "],
        ["code" => "bi", "flag-class" => "bi flag", "name" => "Burundi "],
        ["code" => "tc", "flag-class" => "tc flag", "name" => "Caicos Islands ",],
        ["code" => "kh", "flag-class" => "kh flag", "name" => "Cambodia "],
        ["code" => "cm", "flag-class" => "cm flag", "name" => "Cameroon "],
        ["code" => "ca", "flag-class" => "ca flag", "name" => "Canada "],
        ["code" => "cv", "flag-class" => "cv flag", "name" => "Cape Verde "],
        ["code" => "ky", "flag-class" => "ky flag", "name" => "Cayman Islands ",],
        ["code" => "cf", "flag-class" => "cf flag", "name" => "Central African Republic",],
        ["code" => "td", "flag-class" => "td flag", "name" => "Chad "],
        ["code" => "cl", "flag-class" => "cl flag", "name" => "Chile "],
        ["code" => "cn", "flag-class" => "cn flag", "name" => "China "],
        ["code" => "cx", "flag-class" => "cx flag", "name" => "Christmas Island ",],
        ["code" => "cc", "flag-class" => "cc flag", "name" => "Cocos Islands "],
        ["code" => "co", "flag-class" => "co flag", "name" => "Colombia "],
        ["code" => "km", "flag-class" => "km flag", "name" => "Comoros "],
        [
            "code" => "cg",
            "flag-class" => "cg flag",
            "name" => "Congo Brazzaville ",
        ],
        ["code" => "cd", "flag-class" => "cd flag", "name" => "Congo "],
        ["code" => "ck", "flag-class" => "ck flag", "name" => "Cook Islands "],
        ["code" => "cr", "flag-class" => "cr flag", "name" => "Costa Rica "],
        ["code" => "ci", "flag-class" => "ci flag", "name" => "Cote Divoire "],
        ["code" => "hr", "flag-class" => "hr flag", "name" => "Croatia "],
        ["code" => "cu", "flag-class" => "cu flag", "name" => "Cuba "],
        ["code" => "cy", "flag-class" => "cy flag", "name" => "Cyprus "],
        [
            "code" => "cz",
            "flag-class" => "cz flag",
            "name" => "Czech Republic ",
        ],
        ["code" => "dk", "flag-class" => "dk flag", "name" => "Denmark "],
        ["code" => "dj", "flag-class" => "dj flag", "name" => "Djibouti "],
        ["code" => "dm", "flag-class" => "dm flag", "name" => "Dominica "],
        [
            "code" => "do",
            "flag-class" => "do flag",
            "name" => "Dominican Republic",
        ],
        ["code" => "ec", "flag-class" => "ec flag", "name" => "Ecuador "],
        ["code" => "eg", "flag-class" => "eg flag", "name" => "Egypt "],
        ["code" => "sv", "flag-class" => "sv flag", "name" => "El Salvador "],
        ["code" => "gb", "flag-class" => "gb flag", "name" => "England "],
        [
            "code" => "gq",
            "flag-class" => "gq flag",
            "name" => "Equatorial Guinea ",
        ],
        ["code" => "er", "flag-class" => "er flag", "name" => "Eritrea "],
        ["code" => "ee", "flag-class" => "ee flag", "name" => "Estonia "],
        ["code" => "et", "flag-class" => "et flag", "name" => "Ethiopia "],
        [
            "code" => "eu",
            "flag-class" => "eu flag",
            "name" => "European Union ",
        ],
        [
            "code" => "fk",
            "flag-class" => "fk flag",
            "name" => "Falkland Islands ",
        ],
        ["code" => "fo", "flag-class" => "fo flag", "name" => "Faroe Islands "],
        ["code" => "fj", "flag-class" => "fj flag", "name" => "Fiji "],
        ["code" => "fi", "flag-class" => "fi flag", "name" => "Finland "],
        ["code" => "fr", "flag-class" => "fr flag", "name" => "France "],
        ["code" => "gf", "flag-class" => "gf flag", "name" => "French Guiana "],
        [
            "code" => "pf",
            "flag-class" => "pf flag",
            "name" => "French Polynesia ",
        ],
        [
            "code" => "tf",
            "flag-class" => "tf flag",
            "name" => "French Territories",
        ],
        ["code" => "ga", "flag-class" => "ga flag", "name" => "Gabon "],
        ["code" => "gm", "flag-class" => "gm flag", "name" => "Gambia "],
        ["code" => "ge", "flag-class" => "ge flag", "name" => "Georgia "],
        ["code" => "de", "flag-class" => "de flag", "name" => "Germany "],
        ["code" => "gh", "flag-class" => "gh flag", "name" => "Ghana "],
        ["code" => "gi", "flag-class" => "gi flag", "name" => "Gibraltar "],
        ["code" => "gr", "flag-class" => "gr flag", "name" => "Greece "],
        ["code" => "gl", "flag-class" => "gl flag", "name" => "Greenland "],
        ["code" => "gd", "flag-class" => "gd flag", "name" => "Grenada "],
        ["code" => "gp", "flag-class" => "gp flag", "name" => "Guadeloupe "],
        ["code" => "gu", "flag-class" => "gu flag", "name" => "Guam "],
        ["code" => "gt", "flag-class" => "gt flag", "name" => "Guatemala "],
        ["code" => "gw", "flag-class" => "gw flag", "name" => "Guinea-Bissau "],
        ["code" => "gn", "flag-class" => "gn flag", "name" => "Guinea "],
        ["code" => "gy", "flag-class" => "gy flag", "name" => "Guyana "],
        ["code" => "ht", "flag-class" => "ht flag", "name" => "Haiti "],
        ["code" => "hm", "flag-class" => "hm flag", "name" => "Heard Island "],
        ["code" => "hn", "flag-class" => "hn flag", "name" => "Honduras "],
        ["code" => "hk", "flag-class" => "hk flag", "name" => "Hong Kong "],
        ["code" => "hu", "flag-class" => "hu flag", "name" => "Hungary "],
        ["code" => "is", "flag-class" => "is flag", "name" => "Iceland "],
        ["code" => "in", "flag-class" => "in flag", "name" => "India "],
        [
            "code" => "io",
            "flag-class" => "io flag",
            "name" => "Indian Ocean Territory",
        ],
        ["code" => "id", "flag-class" => "id flag", "name" => "Indonesia "],
        ["code" => "ir", "flag-class" => "ir flag", "name" => "Iran "],
        ["code" => "iq", "flag-class" => "iq flag", "name" => "Iraq "],
        ["code" => "ie", "flag-class" => "ie flag", "name" => "Ireland "],
        ["code" => "il", "flag-class" => "il flag", "name" => "Israel "],
        ["code" => "it", "flag-class" => "it flag", "name" => "Italy "],
        ["code" => "jm", "flag-class" => "jm flag", "name" => "Jamaica "],
        ["code" => "jp", "flag-class" => "jp flag", "name" => "Japan "],
        ["code" => "jo", "flag-class" => "jo flag", "name" => "Jordan "],
        ["code" => "kz", "flag-class" => "kz flag", "name" => "Kazakhstan "],
        ["code" => "ke", "flag-class" => "ke flag", "name" => "Kenya "],
        ["code" => "ki", "flag-class" => "ki flag", "name" => "Kiribati "],
        ["code" => "kw", "flag-class" => "kw flag", "name" => "Kuwait "],
        ["code" => "kg", "flag-class" => "kg flag", "name" => "Kyrgyzstan "],
        ["code" => "la", "flag-class" => "la flag", "name" => "Laos "],
        ["code" => "lv", "flag-class" => "lv flag", "name" => "Latvia "],
        ["code" => "lb", "flag-class" => "lb flag", "name" => "Lebanon "],
        ["code" => "ls", "flag-class" => "ls flag", "name" => "Lesotho "],
        ["code" => "lr", "flag-class" => "lr flag", "name" => "Liberia "],
        ["code" => "ly", "flag-class" => "ly flag", "name" => "Libya "],
        ["code" => "li", "flag-class" => "li flag", "name" => "Liechtenstein "],
        ["code" => "lt", "flag-class" => "lt flag", "name" => "Lithuania "],
        ["code" => "lu", "flag-class" => "lu flag", "name" => "Luxembourg "],
        ["code" => "mo", "flag-class" => "mo flag", "name" => "Macau "],
        ["code" => "mk", "flag-class" => "mk flag", "name" => "Macedonia "],
        ["code" => "mg", "flag-class" => "mg flag", "name" => "Madagascar "],
        ["code" => "mw", "flag-class" => "mw flag", "name" => "Malawi "],
        ["code" => "my", "flag-class" => "my flag", "name" => "Malaysia "],
        ["code" => "mv", "flag-class" => "mv flag", "name" => "Maldives "],
        ["code" => "ml", "flag-class" => "ml flag", "name" => "Mali "],
        ["code" => "mt", "flag-class" => "mt flag", "name" => "Malta "],
        [
            "code" => "mh",
            "flag-class" => "mh flag",
            "name" => "Marshall Islands ",
        ],
        ["code" => "mq", "flag-class" => "mq flag", "name" => "Martinique "],
        ["code" => "mr", "flag-class" => "mr flag", "name" => "Mauritania "],
        ["code" => "mu", "flag-class" => "mu flag", "name" => "Mauritius "],
        ["code" => "yt", "flag-class" => "yt flag", "name" => "Mayotte "],
        ["code" => "mx", "flag-class" => "mx flag", "name" => "Mexico "],
        ["code" => "fm", "flag-class" => "fm flag", "name" => "Micronesia "],
        ["code" => "md", "flag-class" => "md flag", "name" => "Moldova "],
        ["code" => "mc", "flag-class" => "mc flag", "name" => "Monaco "],
        ["code" => "mn", "flag-class" => "mn flag", "name" => "Mongolia "],
        ["code" => "me", "flag-class" => "me flag", "name" => "Montenegro "],
        ["code" => "ms", "flag-class" => "ms flag", "name" => "Montserrat "],
        ["code" => "ma", "flag-class" => "ma flag", "name" => "Morocco "],
        ["code" => "mz", "flag-class" => "mz flag", "name" => "Mozambique "],
        ["code" => "na", "flag-class" => "na flag", "name" => "Namibia "],
        ["code" => "nr", "flag-class" => "nr flag", "name" => "Nauru "],
        ["code" => "np", "flag-class" => "np flag", "name" => "Nepal "],
        [
            "code" => "an",
            "flag-class" => "an flag",
            "name" => "Netherlands Antilles",
        ],
        ["code" => "nl", "flag-class" => "nl flag", "name" => "Netherlands "],
        ["code" => "nc", "flag-class" => "nc flag", "name" => "New Caledonia "],
        ["code" => "pg", "flag-class" => "pg flag", "name" => "New Guinea "],
        ["code" => "nz", "flag-class" => "nz flag", "name" => "New Zealand "],
        ["code" => "ni", "flag-class" => "ni flag", "name" => "Nicaragua "],
        ["code" => "ne", "flag-class" => "ne flag", "name" => "Niger "],
        ["code" => "ng", "flag-class" => "ng flag", "name" => "Nigeria "],
        ["code" => "nu", "flag-class" => "nu flag", "name" => "Niue "],
        [
            "code" => "nf",
            "flag-class" => "nf flag",
            "name" => "Norfolk Island ",
        ],
        ["code" => "kp", "flag-class" => "kp flag", "name" => "North Korea "],
        [
            "code" => "mp",
            "flag-class" => "mp flag",
            "name" => "Northern Mariana Islands",
        ],
        ["code" => "no", "flag-class" => "no flag", "name" => "Norway "],
        ["code" => "om", "flag-class" => "om flag", "name" => "Oman "],
        ["code" => "pk", "flag-class" => "pk flag", "name" => "Pakistan "],
        ["code" => "pw", "flag-class" => "pw flag", "name" => "Palau "],
        ["code" => "ps", "flag-class" => "ps flag", "name" => "Palestine "],
        ["code" => "pa", "flag-class" => "pa flag", "name" => "Panama "],
        ["code" => "py", "flag-class" => "py flag", "name" => "Paraguay "],
        ["code" => "pe", "flag-class" => "pe flag", "name" => "Peru "],
        ["code" => "ph", "flag-class" => "ph flag", "name" => "Philippines "],
        [
            "code" => "pn",
            "flag-class" => "pn flag",
            "name" => "Pitcairn Islands ",
        ],
        ["code" => "pl", "flag-class" => "pl flag", "name" => "Poland "],
        ["code" => "pt", "flag-class" => "pt flag", "name" => "Portugal "],
        ["code" => "pr", "flag-class" => "pr flag", "name" => "Puerto Rico "],
        ["code" => "qa", "flag-class" => "qa flag", "name" => "Qatar "],
        ["code" => "re", "flag-class" => "re flag", "name" => "Reunion "],
        ["code" => "ro", "flag-class" => "ro flag", "name" => "Romania "],
        ["code" => "ru", "flag-class" => "ru flag", "name" => "Russia "],
        ["code" => "rw", "flag-class" => "rw flag", "name" => "Rwanda "],
        ["code" => "sh", "flag-class" => "sh flag", "name" => "Saint Helena "],
        [
            "code" => "kn",
            "flag-class" => "kn flag",
            "name" => "Saint Kitts and Nevis",
        ],
        ["code" => "lc", "flag-class" => "lc flag", "name" => "Saint Lucia "],
        ["code" => "pm", "flag-class" => "pm flag", "name" => "Saint Pierre "],
        ["code" => "vc", "flag-class" => "vc flag", "name" => "Saint Vincent "],
        ["code" => "ws", "flag-class" => "ws flag", "name" => "Samoa "],
        ["code" => "sm", "flag-class" => "sm flag", "name" => "San Marino "],
        [
            "code" => "gs",
            "flag-class" => "gs flag",
            "name" => "Sandwich Islands ",
        ],
        ["code" => "st", "flag-class" => "st flag", "name" => "Sao Tome "],
        ["code" => "sa", "flag-class" => "sa flag", "name" => "Saudi Arabia "],
        ["code" => "sn", "flag-class" => "sn flag", "name" => "Senegal "],
        ["code" => "cs", "flag-class" => "cs flag", "name" => "Serbia "],
        ["code" => "rs", "flag-class" => "rs flag", "name" => "Serbia "],
        ["code" => "sc", "flag-class" => "sc flag", "name" => "Seychelles "],
        ["code" => "sl", "flag-class" => "sl flag", "name" => "Sierra Leone "],
        ["code" => "sg", "flag-class" => "sg flag", "name" => "Singapore "],
        ["code" => "sk", "flag-class" => "sk flag", "name" => "Slovakia "],
        ["code" => "si", "flag-class" => "si flag", "name" => "Slovenia "],
        [
            "code" => "sb",
            "flag-class" => "sb flag",
            "name" => "Solomon Islands ",
        ],
        ["code" => "so", "flag-class" => "so flag", "name" => "Somalia "],
        ["code" => "za", "flag-class" => "za flag", "name" => "South Africa "],
        ["code" => "kr", "flag-class" => "kr flag", "name" => "South Korea "],
        ["code" => "es", "flag-class" => "es flag", "name" => "Spain "],
        ["code" => "lk", "flag-class" => "lk flag", "name" => "Sri Lanka "],
        ["code" => "sd", "flag-class" => "sd flag", "name" => "Sudan "],
        ["code" => "sr", "flag-class" => "sr flag", "name" => "Suriname "],
        ["code" => "sj", "flag-class" => "sj flag", "name" => "Svalbard "],
        ["code" => "sz", "flag-class" => "sz flag", "name" => "Swaziland "],
        ["code" => "se", "flag-class" => "se flag", "name" => "Sweden "],
        ["code" => "ch", "flag-class" => "ch flag", "name" => "Switzerland "],
        ["code" => "sy", "flag-class" => "sy flag", "name" => "Syria "],
        ["code" => "tw", "flag-class" => "tw flag", "name" => "Taiwan "],
        ["code" => "tj", "flag-class" => "tj flag", "name" => "Tajikistan "],
        ["code" => "tz", "flag-class" => "tz flag", "name" => "Tanzania "],
        ["code" => "th", "flag-class" => "th flag", "name" => "Thailand "],
        ["code" => "tl", "flag-class" => "tl flag", "name" => "Timorleste "],
        ["code" => "tg", "flag-class" => "tg flag", "name" => "Togo "],
        ["code" => "tk", "flag-class" => "tk flag", "name" => "Tokelau "],
        ["code" => "to", "flag-class" => "to flag", "name" => "Tonga "],
        ["code" => "tt", "flag-class" => "tt flag", "name" => "Trinidad "],
        ["code" => "tn", "flag-class" => "tn flag", "name" => "Tunisia "],
        ["code" => "tr", "flag-class" => "tr flag", "name" => "Turkey "],
        ["code" => "tm", "flag-class" => "tm flag", "name" => "Turkmenistan "],
        ["code" => "tv", "flag-class" => "tv flag", "name" => "Tuvalu "],
        ["code" => "ug", "flag-class" => "ug flag", "name" => "Uganda "],
        ["code" => "ua", "flag-class" => "ua flag", "name" => "Ukraine "],
        [
            "code" => "ae",
            "flag-class" => "ae flag",
            "name" => "United Arab Emirates",
        ],
        ["code" => "us", "flag-class" => "us flag", "name" => "United States "],
        ["code" => "uy", "flag-class" => "uy flag", "name" => "Uruguay "],
        [
            "code" => "um",
            "flag-class" => "um flag",
            "name" => "Us Minor Islands ",
        ],
        [
            "code" => "vi",
            "flag-class" => "vi flag",
            "name" => "Us Virgin Islands ",
        ],
        ["code" => "uz", "flag-class" => "uz flag", "name" => "Uzbekistan "],
        ["code" => "vu", "flag-class" => "vu flag", "name" => "Vanuatu "],
        ["code" => "va", "flag-class" => "va flag", "name" => "Vatican City "],
        ["code" => "ve", "flag-class" => "ve flag", "name" => "Venezuela "],
        ["code" => "vn", "flag-class" => "vn flag", "name" => "Vietnam "],
        [
            "code" => "wf",
            "flag-class" => "wf flag",
            "name" => "Wallis and Futuna ",
        ],
        [
            "code" => "eh",
            "flag-class" => "eh flag",
            "name" => "Western Sahara ",
        ],
        ["code" => "ye", "flag-class" => "ye flag", "name" => "Yemen "],
        ["code" => "zm", "flag-class" => "zm flag", "name" => "Zambia "],
        ["code" => "zw", "flag-class" => "zw flag", "name" => "Zimbabwe"],
    ];

    public $currentStep = 1;
    public $email;
    public $country_s;
    public $phone;
    public $company_details;

    public $profile_picture;

    public function render()
    {
        // return with countries
        return view('livewire.register', [
            'countries' => json_encode($this->countries, JSON_PRETTY_PRINT),
        ]);
    }

    public function stepOne()
    {
        $this->validate([
            'email' => 'required|email',
            // 'country_s' => 'required',
            'phone' => 'required|numeric',
        ]);
        $this->currentStep++;
    }

    public function stepTwo()
    {
        $this->validate([
            'company_details' => 'required',
        ]);
        $this->currentStep++;
    }

    public function prevStep()
    {
        $this->currentStep--;
    }


    public function summary()
    {
        $this->currentStep++;
    }

    public function signUp()
    {
        $this->currentStep = 1;
    }
}
