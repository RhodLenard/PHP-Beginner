<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="lesson12.php" method="post">
        <label>Enter a Country</label><br>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // associate array = An array made of key => value pairs

    $capitals = array(
      "Afghanistan" => "Kabul",
      "Albania" => "Tirana",
      "Algeria" => "Algiers",
      "Andorra" => "Andorra la Vella",
      "Angola" => "Luanda",
      "Antigua and Barbuda" => "Saint John's",
      "Argentina" => "Buenos Aires",
      "Armenia" => "Yerevan",
      "Australia" => "Canberra",
      "Austria" => "Vienna",
      "Azerbaijan" => "Baku",
      "Bahamas" => "Nassau",
      "Bahrain" => "Manama",
      "Bangladesh" => "Dhaka",
      "Barbados" => "Bridgetown",
      "Belarus" => "Minsk",
      "Belgium" => "Brussels",
      "Belize" => "Belmopan",
      "Benin" => "Porto-Novo",
      "Bhutan" => "Thimphu",
      "Bolivia" => "Sucre",
      "Bosnia and Herzegovina" => "Sarajevo",
      "Botswana" => "Gaborone",
      "Brazil" => "Brasília",
      "Brunei" => "Bandar Seri Begawan",
      "Bulgaria" => "Sofia",
      "Burkina Faso" => "Ouagadougou",
      "Burundi" => "Gitega",
      "Cabo Verde" => "Praia",
      "Cambodia" => "Phnom Penh",
      "Cameroon" => "Yaoundé",
      "Canada" => "Ottawa",
      "Central African Republic" => "Bangui",
      "Chad" => "N'Djamena",
      "Chile" => "Santiago",
      "China" => "Beijing",
      "Colombia" => "Bogotá",
      "Comoros" => "Moroni",
      "Congo (Congo-Brazzaville)" => "Brazzaville",
      "Congo (Democratic Republic) (Congo-Kinshasa)" => "Kinshasa",
      "Costa Rica" => "San José",
      "Croatia" => "Zagreb",
      "Cuba" => "Havana",
      "Cyprus" => "Nicosia",
      "Czech Republic (Czechia)" => "Prague",
      "Denmark" => "Copenhagen",
      "Djibouti" => "Djibouti",
      "Dominica" => "Roseau",
      "Dominican Republic" => "Santo Domingo",
      "Ecuador" => "Quito",
      "Egypt" => "Cairo",
      "El Salvador" => "San Salvador",
      "Equatorial Guinea" => "Malabo",
      "Eritrea" => "Asmara",
      "Estonia" => "Tallinn",
      "Eswatini" => "Mbabane",
      "Ethiopia" => "Addis Ababa",
      "Fiji" => "Suva",
      "Finland" => "Helsinki",
      "France" => "Paris",
      "Gabon" => "Libreville",
      "Gambia" => "Banjul",
      "Georgia" => "Tbilisi",
      "Germany" => "Berlin",
      "Ghana" => "Accra",
      "Greece" => "Athens",
      "Grenada" => "Saint George's",
      "Guatemala" => "Guatemala City",
      "Guinea" => "Conakry",
      "Guinea-Bissau" => "Bissau",
      "Guyana" => "Georgetown",
      "Haiti" => "Port-au-Prince",
      "Honduras" => "Tegucigalpa",
      "Hungary" => "Budapest",
      "Iceland" => "Reykjavík",
      "India" => "New Delhi",
      "Indonesia" => "Jakarta",
      "Iran" => "Tehran",
      "Iraq" => "Baghdad",
      "Ireland" => "Dublin",
      "Israel" => "Jerusalem",
      "Italy" => "Rome",
      "Jamaica" => "Kingston",
      "Japan" => "Tokyo",
      "Jordan" => "Amman",
      "Kazakhstan" => "Astana",
      "Kenya" => "Nairobi",
      "Kiribati" => "Tarawa",
      "Korea, North" => "Pyongyang",
      "Korea, South" => "Seoul",
      "Kuwait" => "Kuwait City",
      "Kyrgyzstan" => "Bishkek",
      "Laos" => "Vientiane",
      "Latvia" => "Riga",
      "Lebanon" => "Beirut",
      "Lesotho" => "Maseru",
      "Liberia" => "Monrovia",
      "Libya" => "Tripoli",
      "Liechtenstein" => "Vaduz",
      "Lithuania" => "Vilnius",
      "Luxembourg" => "Luxembourg City",
      "Madagascar" => "Antananarivo",
      "Malawi" => "Lilongwe",
      "Malaysia" => "Kuala Lumpur",
      "Maldives" => "Malé",
      "Mali" => "Bamako",
      "Malta" => "Valletta",
      "Marshall Islands" => "Majuro",
      "Mauritania" => "Nouakchott",
      "Mauritius" => "Port Louis",
      "Mexico" => "Mexico City",
      "Micronesia" => "Palikir",
      "Moldova" => "Chișinău",
      "Monaco" => "Monaco",
      "Mongolia" => "Ulaanbaatar",
      "Montenegro" => "Podgorica",
      "Morocco" => "Rabat",
      "Mozambique" => "Maputo",
      "Myanmar (Burma)" => "Naypyidaw",
      "Namibia" => "Windhoek",
      "Nauru" => "Yaren",
      "Nepal" => "Kathmandu",
      "Netherlands" => "Amsterdam",
      "New Zealand" => "Wellington",
      "Nicaragua" => "Managua",
      "Niger" => "Niamey",
      "Nigeria" => "Abuja",
      "North Macedonia" => "Skopje",
      "Norway" => "Oslo",
      "Oman" => "Muscat",
      "Pakistan" => "Islamabad",
      "Palau" => "Ngerulmud",
      "Panama" => "Panama City",
      "Papua New Guinea" => "Port Moresby",
      "Paraguay" => "Asunción",
      "Peru" => "Lima",
      "Philippines" => "Manila",
      "Poland" => "Warsaw",
      "Portugal" => "Lisbon",
      "Qatar" => "Doha",
      "Romania" => "Bucharest",
      "Russia" => "Moscow",
      "Rwanda" => "Kigali",
      "Saint Kitts and Nevis" => "Basseterre",
      "Saint Lucia" => "Castries",
      "Saint Vincent and the Grenadines" => "Kingstown",
      "Samoa" => "Apia",
      "San Marino" => "City of San Marino",
      "Sao Tome and Principe" => "São Tomé",
      "Saudi Arabia" => "Riyadh",
      "Senegal" => "Dakar",
      "Serbia" => "Belgrade",
      "Seychelles" => "Victoria",
      "Sierra Leone" => "Freetown",
      "Singapore" => "Singapore",
      "Slovakia" => "Bratislava",
      "Slovenia" => "Ljubljana",
      "Solomon Islands" => "Honiara",
      "Somalia" => "Mogadishu",
      "South Africa" => "Pretoria",
      "South Sudan" => "Juba",
      "Spain" => "Madrid",
      "Sri Lanka" => "Sri Jayawardenepura Kotte",
      "Sudan" => "Khartoum",
      "Suriname" => "Paramaribo",
      "Sweden" => "Stockholm",
      "Switzerland" => "Bern",
      "Syria" => "Damascus",
      "Taiwan" => "Taipei",
      "Tajikistan" => "Dushanbe",
      "Tanzania" => "Dodoma",
      "Thailand" => "Bangkok",
      "Timor-Leste" => "Dili",
      "Togo" => "Lomé",
      "Tonga" => "Nukuʻalofa",
      "Trinidad and Tobago" => "Port of Spain",
      "Tunisia" => "Tunis",
      "Turkey" => "Ankara",
      "Turkmenistan" => "Ashgabat",
      "Tuvalu" => "Funafuti",
      "Uganda" => "Kampala",
      "Ukraine" => "Kyiv",
      "United Arab Emirates" => "Abu Dhabi",
      "United Kingdom" => "London",
      "United States" => "Washington, D.C.",
      "Uruguay" => "Montevideo",
      "Uzbekistan" => "Tashkent",
      "Vanuatu" => "Port Vila",
      "Vatican City" => "Vatican City",
      "Venezuela" => "Caracas",
      "Vietnam" => "Hanoi",
      "Yemen" => "Sana'a",
      "Zambia" => "Lusaka",
      "Zimbabwe" => "Harare"
  );
    
                      
    $capital = $capitals[$_POST["country"]];
    
    echo"The capital is {$capital}";
    

    //$capitals["USA"] = "Las Vegas";
    //$capitals["China"] = "Beijing";  Add
    //array_pop($capitals);            Delete last
    //array_shift($capitals);          Delete first
    //$keys = array_keys($capitals);   Keys only
    //$values = array_values($capitals); Values only
    // $capitals = array_flip($capitals); Flip key & value
    //$capitals = array_reverse($capitals); Reverse
    //echo count($capitals)

    
    //foreach($capitals as $capital => $value){
    //      echo "{$capital} = {$value} <br>";
    //  }

    //foreach($keys as $key){
    //      echo "{$key} <br>";
    //  }

    // foreach($values as $value){
    //  echo "{$value} <br>";
    //  }

    //foreach($capitals as $key => $value){
    //      echo"{$key} = {$value} <br>";
    //  }

    //foreach($capitals as $key => $value){
    //        echo"{$key} = {$value} <br>";
    //        }
?>