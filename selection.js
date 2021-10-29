$(document).ready(function () {
    // Initializing arrays with city names.
    var Audi = [
        {
            display: "W100",
            value: "100"
        },
        {
            display: "80",
            value: "80"
        },
        {
            display: "A1",
            value: "A1"
        },
        {
            display: "A3",
            value: "A3"
        },
        {
            display: "A4",
            value: "A4"
        },
        {
            display: "A5",
            value: "A5"
        },
        {
            display: "A6",
            value: "A6"
        },
        {
            display: "A7",
            value: "A7"
        },
        {
            display: "A8",
            value: "A8"
        },
        {
            display: "Allroad",
            value: "Allroad"
        },
        {
            display: "Q3",
            value: "Q3"
        },
        {
            display: "Q5",
            value: "Q5"
        },
        {
            display: "Q7",
            value: "Q7"
        },
        {
            display: "R8",
            value: "R8"
        },
        {
            display: "RS",
            value: "RS"
        },
        {
            display: "RS2",
            value: "RS2"
        },
        {
            display: "RS3",
            value: "RS3"
        },
        {
            display: "RS4",
            value: "RS4"
        },
        {
            display: "RS5",
            value: "RS5"
        },
        {
            display: "RS6",
            value: "RS6"
        },
        {
            display: "RS7",
            value: "RS7"
        },
        {
            display: "RS8",
            value: "RS8"
        },
        {
            display: "S",
            value: "S"
        },
        {
            display: "S3",
            value: "S3"
        },
        {
            display: "S4",
            value: "S4"
        },
        {
            display: "S6",
            value: "S6"
        },
        {
            display: "S7",
            value: "S7"
        },
        {
            display: "S8",
            value: "S8"
        },
        {
            display: "TT",
            value: "TT"
        },
        {
            display: "TTS",
            value: "TTS"
        }
    ];

    var Chevrolet = [
        {
            display: "A-10",
            value: "A-10"
        },
        {
            display: "A-20",
            value: "A-20"
        },
        {
            display: "500",
            value: "500"
        },
        {
            display: "Astra",
            value: "Astra"
        },
        {
            display: "Astra Sedan",
            value: "Astra Sedan"
        },
        {
            display: "Agile LT",
            value: "Agile LT"
        },
        {
            display: "Blazer",
            value: "Blazer"
        },
        {
            display: "Bonanza",
            value: "Bonanza"
        },
        {
            display: "Brasinca",
            value: "Brasinca"
        },
        {
            display: "C-10",
            value: "C-10"
        },
        {
            display: "C-20",
            value: "C-20"
        },
        {
            display: "Calibra",
            value: "Calibra"
        },
        {
            display: "Camaro",
            value: "Camaro"
        },
        {
            display: "Caprice",
            value: "Caprice"
        },
        {
            display: "Captiva",
            value: "Captiva"
        },
        {
            display: "Caravan",
            value: "Caravan"
        },
        {
            display: "Cavalier",
            value: "Cavalier"
        },
        {
            display: "Celta",
            value: "Celta"
        },
        {
            display: "Celta Spirit",
            value: "Celta Spirit"
        },
        {
            display: "Chevette",
            value: "Chevette"
        },
        {
            display: "Cheynne",
            value: "Cheynne"
        },
        {
            display: "Chevy",
            value: "Chevy"
        },
        {
            display: "Classic",
            value: "Classic"
        },
        {
            display: "Cobalt",
            value: "Cobalt"
        },
        {
            display: "Corsa",
            value: "Corsa"
        },
        {
            display: "Corsa Classic Sedan",
            value: "Corsa Classic Sedan"
        },
        {
            display: "Corsa Furgão",
            value: "Corsa Furgão"
        },
        {
            display: "Corsa Pick-Up",
            value: "Corsa Pick-Up"
        },
        {
            display: "Corsa Sedan",
            value: "Corsa Sedan"
        },
        {
            display: "Corsa Wagon",
            value: "Corsa Wagon"
        },
        {
            display: "Corvette",
            value: "Corvette"
        },
        {
            display: "Cruze",
            value: "Cruze"
        },
        {
            display: "D-10",
            value: "D-10"
        },
        {
            display: "D-20",
            value: "D-20"
        },
        {
            display: "Grand Blazer",
            value: "Grand Blazer"
        },
        {
            display: "Ipanema",
            value: "Ipanema"
        },
        {
            display: "Kadett",
            value: "Kadett"
        },
        {
            display: "Lumina",
            value: "Lumina"
        },
        {
            display: "Malibu",
            value: "Malibu"
        },
        {
            display: "Marajo",
            value: "Marajo"
        },
        {
            display: "Meriva",
            value: "Meriva"
        },
        {
            display: "Montana",
            value: "Montana"
        },
        {
            display: "Monza",
            value: "Monza"
        },
        {
            display: "Omega",
            value: "Omega"
        },
        {
            display: "Onix",
            value: "Onix"
        },
        {
            display: "Opala",
            value: "Opala"
        },
        {
            display: "Prisma",
            value: "Prisma"
        },
        {
            display: "S10",
            value: "S10"
        },
        {
            display: "SS1O",
            value: "SS1O"
        },
        {
            display: "Saturn",
            value: "Saturn"
        },
        {
            display: "Sierra",
            value: "Sierra"
        },
        {
            display: "Silverado",
            value: "Silverado"
        },
        {
            display: "Sonic",
            value: "Sonic"
        },
        {
            display: "Sonoma",
            value: "Sonoma"
        },
        {
            display: "SpaceVan",
            value: "SpaceVan"
        },
        {
            display: "Spin",
            value: "Spin"
        },
        {
            display: "Suburban",
            value: "Suburban"
        },
        {
            display: "Suprema",
            value: "Suprema"
        },
        {
            display: "Syclone",
            value: "Syclone"
        },
        {
            display: "Tigra",
            value: "Tigra"
        },
        {
            display: "Tracker",
            value: "Tracker"
        },
        {
            display: "Trafic",
            value: "Trafic"
        },
        {
            display: "Trailblazer",
            value: "Trailblazer"
        },
        {
            display: "Vectra",
            value: "Vectra"
        },
        {
            display: "Varaneio",
            value: "Varaneio"
        },
        {
            display: "Zafira ",
            value: "Zafira"
        }
    ];

    var Citroen = [
        {
            display: "AX",
            value: "AX"
        },
        {
            display: "AirCross",
            value: "AirCross"
        },
        {
            display: "BX",
            value: "BX"
        },
        {
            display: "Berlingo",
            value: "Berlingo"
        },
        {
            display: "C3",
            value: "C3"
        },
        {
            display: "C4",
            value: "C4"
        },
        {
            display: "C5",
            value: "C5"
        },
        {
            display: "C6",
            value: "C6"
        },
        {
            display: "C8",
            value: "C8"
        },
        {
            display: "DS3",
            value: "DS3"
        },
        {
            display: "DS4",
            value: "DS4"
        },
        {
            display: "DS5",
            value: "DS5"
        },
        {
            display: "Evasion",
            value: "Evasion"
        },
        {
            display: "Jumper",
            value: "Jumper"
        },
        {
            display: "XM",
            value: "XM"
        },
        {
            display: "Xantia",
            value: "Xantia"
        },
        {
            display: "Xsara",
            value: "Xsara"
        },
        {
            display: "ZX",
            value: "ZX"
        }
    ];

    var Fiat = [
        {
            display: "147",
            value: "147"
        },
        {
            display: "500",
            value: "500"
        },
        {
            display: "Brava",
            value: "Brava"
        },
        {
            display: "Bravo",
            value: "Bravo"
        },
        {
            display: "Cinquecento",
            value: "Cinquecento"
        },
        {
            display: "Coupe",
            value: "Coupe"
        },
        {
            display: "Doblo",
            value: "Doblo"
        },
        {
            display: "Ducato",
            value: "Ducato"
        },
        {
            display: "Duna",
            value: "Duna"
        },
        {
            display: "Elba",
            value: "Elba"
        },
        {
            display: "Elba Weekend",
            value: "Elba Weekend"
        },
        {
            display: "Fiorino",
            value: "Fiorino"
        },
        {
            display: "Freemont",
            value: "Freemont"
        },
        {
            display: "Grand",
            value: "Grand"
        },
        {
            display: "Grand Siena",
            value: "Grand Siena"
        },
        {
            display: "Idea",
            value: "Idea"
        },
        {
            display: "Linea",
            value: "Linea"
        },
        {
            display: "Marea",
            value: "Marea"
        },
        {
            display: "Marea Weekend",
            value: "Marea Weekend"
        },
        {
            display: "Oggi",
            value: "Oggi"
        },
        {
            display: "Palio",
            value: "Palio"
        },
        {
            display: "Palio Weekend",
            value: "Palio Weekend"
        },
        {
            display: "Panorama",
            value: "Panorama"
        },
        {
            display: "Premio",
            value: "Premio"
        },
        {
            display: "Punto",
            value: "Punto"
        },
        {
            display: "Siena",
            value: "Siena"
        },
        {
            display: "Stilo",
            value: "Stilo"
        },
        {
            display: "Strada",
            value: "Strada"
        },
        {
            display: "Tempra",
            value: "Tempra"
        },
        {
            display: "Tipo",
            value: "Tipo"
        },
        {
            display: "Toro",
            value: "Toro"
        },
        {
            display: "Uno",
            value: "Uno"
        },
        {
            display: "Weekend Trekking",
            value: "Weekend Trekking"
        }
    ];


    var Ford = [
        {
            display: "Aerostar",
            value: "Aerostar"
        },
        {
            display: "Aspire",
            value: "Aspire"
        },
        {
            display: "Belina",
            value: "Belina"
        },
        {
            display: "Club Wagon",
            value: "Club Wagon"
        },
        {
            display: "Cinquecento",
            value: "Cinquecento"
        },
        {
            display: "Contour",
            value: "Contour"
        },
        {
            display: "Corcel",
            value: "Corcel"
        },
        {
            display: "Courier",
            value: "Courier"
        },
        {
            display: "Crown Victoria",
            value: "Crown Victoria"
        },
        {
            display: "Del Rey",
            value: "Del Rey"
        },
        {
            display: "EDGE",
            value: "EDGE"
        },
        {
            display: "EcoSport",
            value: "EcoSport"
        },
        {
            display: "Edge",
            value: "Edge"
        },
        {
            display: "Escort",
            value: "Escort"
        },
        {
            display: "Expedition",
            value: "Expedition"
        },
        {
            display: "Explorer",
            value: "Explorer"
        },
        {
            display: "F-100",
            value: "F-100"
        },
        {
            display: "F-1000",
            value: "F-1000"
        },
        {
            display: "F-150",
            value: "F-150"
        },
        {
            display: "F-250",
            value: "F-250"
        },
        {
            display: "Fiesta",
            value: "Fiesta"
        },
        {
            display: "Fiesta Sedan",
            value: "Fiesta Sedan"
        },
        {
            display: "Panorama",
            value: "Panorama"
        },
        {
            display: "Focus",
            value: "Focus"
        },
        {
            display: "Focus Sedan",
            value: "Focus Sedan"
        },
        {
            display: "Furglaine",
            value: "Furglaine"
        },
        {
            display: "Fusion",
            value: "Fusion"
        },
        {
            display: "Ibiza",
            value: "Ibiza"
        },
        {
            display: "Ka",
            value: "Ka"
        },
        {
            display: "Ka+",
            value: "Ka+"
        },
        {
            display: "Mondeo",
            value: "Mondeo"
        },
        {
            display: "Mustang",
            value: "Mustang"
        },
        {
            display: "Pampa",
            value: "Pampa"
        },
        {
            display: "Probe",
            value: "Probe"
        },
        {
            display: "Ranger",
            value: "Ranger"
        },
        {
            display: "Royale",
            value: "Royale"
        },
        {
            display: "Taurus",
            value: "Taurus"
        },
        {
            display: "Thunderbird",
            value: "Thunderbird"
        },
        {
            display: "Transit",
            value: "Transit"
        },
        {
            display: "Verona",
            value: "Verona"
        },
        {
            display: "Versailles",
            value: "Versailles"
        },
        {
            display: "Windstar",
            value: "Windstar"
        }
    ];

    var Honda = [
        {
            display: "Accord",
            value: "Accord"
        },
        {
            display: "Accord Sedã",
            value: "Accord Sedã"
        },
        {
            display: "CR-V",
            value: "CR-V"
        },
        {
            display: "City",
            value: "City"
        },
        {
            display: "Civic",
            value: "Civic"
        },
        {
            display: "Fit",
            value: "Fit"
        },
        {
            display: "HR-V",
            value: "HR-V"
        },
        {
            display: "Odyssey",
            value: "Odyssey"
        },
        {
            display: "Passport",
            value: "Passport"
        },
        {
            display: "Prelude",
            value: "Prelude"
        }
    ];

    var Hyundai = [
        {
            display: "Accent",
            value: "Accent"
        },
        {
            display: "Atos",
            value: "Atos"
        },
        {
            display: "Azera",
            value: "Azera"
        },
        {
            display: "Coupê",
            value: "Coupê"
        },
        {
            display: "EQUSS",
            value: "EQUSS"
        },
        {
            display: "Elantra",
            value: "Elantra"
        },
        {
            display: "Elantra Wagon",
            value: "Elantra Wagon"
        },
        {
            display: "Excel",
            value: "Excel"
        },
        {
            display: "GENESIS",
            value: "GENESIS"
        },
        {
            display: "Galloper",
            value: "Galloper"
        },
        {
            display: "Grand Santa Fé",
            value: "Grand Santa Fé"
        },
        {
            display: "H1 Starex",
            value: "H1 Starex"
        },
        {
            display: "H100",
            value: "H100"
        },
        {
            display: "HB20",
            value: "HB20"
        },
        {
            display: "HB20S",
            value: "HB20S"
        },
        {
            display: "HB20X",
            value: "HB20X"
        },
        {
            display: "HR",
            value: "HR"
        },
        {
            display: "Matrix",
            value: "Matrix"
        },
        {
            display: "Porter",
            value: "Porter"
        },
        {
            display: "Santa Fe",
            value: "Santa Fe"
        },
        {
            display: "Scoupe",
            value: "Scoupe"
        },
        {
            display: "Sonata",
            value: "Sonata"
        },
        {
            display: "Terracan",
            value: "Terracan"
        },
        {
            display: "Trajet",
            value: "Trajet"
        },
        {
            display: "Tucson",
            value: "Tucson"
        },
        {
            display: "Veloster",
            value: "Veloster"
        },
        {
            display: "Veracruz",
            value: "Veracruz"
        },
        {
            display: "i30",
            value: "i30"
        },
        {
            display: "ix35",
            value: "ix35"
        }
    ];

    var JacMotors = [
        {
            display: "J2",
            value: "J2"
        },
        {
            display: "J3",
            value: "J3"
        },
        {
            display: "J5",
            value: "J5"
        },
        {
            display: "J6",
            value: "J6"
        },
        {
            display: "T",
            value: "T"
        },
        {
            display: "T6",
            value: "T6"
        },
        {
            display: "T8",
            value: "T8"
        }
    ];

    var Kia = [
        {
            display: "Besta",
            value: "Besta"
        },
        {
            display: "Bongo",
            value: "Bongo"
        },
        {
            display: "Cadenza",
            value: "Cadenza"
        },
        {
            display: "Carens",
            value: "Carens"
        },
        {
            display: "Carnival",
            value: "Carnival"
        },
        {
            display: "Cerato",
            value: "Cerato"
        },
        {
            display: "Ceres",
            value: "Ceres"
        },
        {
            display: "Clarus",
            value: "Clarus"
        },
        {
            display: "Clarus Wagon",
            value: "Clarus Wagon"
        },
        {
            display: "Grand Carnival",
            value: "Grand Carnival"
        },
        {
            display: "Grand Sportage",
            value: "Grand Sportage"
        },
        {
            display: "Magentis",
            value: "Magentis"
        },
        {
            display: "Mohave",
            value: "Mohave"
        },
        {
            display: "Opirus",
            value: "Opirus"
        },
        {
            display: "Optima",
            value: "Optima"
        },
        {
            display: "Picanto",
            value: "Picanto"
        },
        {
            display: "Quoris",
            value: "Quoris"
        },
        {
            display: "Sephia",
            value: "Sephia"
        },
        {
            display: "Shuma",
            value: "Shuma"
        },
        {
            display: "Sorento",
            value: "Sorento"
        },
        {
            display: "Soul",
            value: "Soul"
        },
        {
            display: "Sportage",
            value: "Sportage"
        }
    ];

    var Lifan = [
        {
            display: "320",
            value: "320"
        },
        {
            display: "530",
            value: "530"
        },
        {
            display: "620",
            value: "620"
        },
        {
            display: "Foison",
            value: "Foison"
        },
        {
            display: "X60",
            value: "X60"
        }
    ];

    var Nissan = [
        {
            display: "300 ZX",
            value: "300 ZX"
        },
        {
            display: "350Z",
            value: "350Z"
        },
        {
            display: "AX",
            value: "AX"
        },
        {
            display: "Altima",
            value: "Altima"
        },
        {
            display: "D-21",
            value: "D-21"
        },
        {
            display: "Frontier",
            value: "Frontier"
        },
        {
            display: "Grand Livina",
            value: "Grand Livina"
        },
        {
            display: "Infiniti",
            value: "Infiniti"
        },
        {
            display: "King-Cab",
            value: "King-Cab"
        },
        {
            display: "Livina",
            value: "Livina"
        },
        {
            display: "Livina S",
            value: "Livina S"
        },
        {
            display: "March",
            value: "March"
        },
        {
            display: "March S",
            value: "March S"
        },
        {
            display: "Maxima",
            value: "Maxima"
        },
        {
            display: "Murano",
            value: "Murano"
        },
        {
            display: "NX",
            value: "NX"
        },
        {
            display: "PathFinder",
            value: "PathFinder"
        },
        {
            display: "Pick-Up",
            value: "Pick-Up"
        },
        {
            display: "Primera",
            value: "Primera"
        },
        {
            display: "Quest",
            value: "Quest"
        },
        {
            display: "SX",
            value: "SX"
        },
        {
            display: "Sentra",
            value: "Sentra"
        },
        {
            display: "Stanza",
            value: "Stanza"
        },
        {
            display: "TIIDA",
            value: "TIIDA"
        },
        {
            display: "Terrano II",
            value: "Terrano II"
        },
        {
            display: "Tiida",
            value: "Tiida"
        },
        {
            display: "Versa",
            value: "Versa"
        },
        {
            display: "X-Terra",
            value: "X-Terra"
        },
        {
            display: "X-Trail",
            value: "X-Trail"
        }
    ];

    var Peugeot = [
        {
            display: "106",
            value: "106"
        },
        {
            display: "2008",
            value: "2008"
        },
        {
            display: "205",
            value: "205"
        },
        {
            display: "206",
            value: "206"
        },
        {
            display: "207",
            value: "207"
        },
        {
            display: "208",
            value: "208"
        },
        {
            display: "3008",
            value: "3008"
        },
        {
            display: "306",
            value: "306"
        },
        {
            display: "307",
            value: "307"
        },
        {
            display: "308",
            value: "308"
        },
        {
            display: "405",
            value: "405"
        },
        {
            display: "406",
            value: "406"
        },
        {
            display: "406",
            value: "406"
        },
        {
            display: "407",
            value: "407"
        },
        {
            display: "408",
            value: "408"
        },
        {
            display: "504",
            value: "504"
        },
        {
            display: "505",
            value: "505"
        },
        {
            display: "508",
            value: "508"
        },
        {
            display: "605",
            value: "605"
        },
        {
            display: "607",
            value: "607"
        },
        {
            display: "806",
            value: "806"
        },
        {
            display: "807",
            value: "807"
        },
        {
            display: "Boxer",
            value: "Boxer"
        },
        {
            display: "Hoggar",
            value: "Hoggar"
        },
        {
            display: "Partner",
            value: "Partner"
        },
        {
            display: "RCZ",
            value: "RCZ"
        }
    ];

    var Renault = [
        {
            display: "19",
            value: "19"
        },
        {
            display: "21",
            value: "21"
        },
        {
            display: "21 Nevada",
            value: "21 Nevada"
        },
        {
            display: "Clio",
            value: "Clio"
        },
        {
            display: "Clio Sedan",
            value: "Clio Sedan"
        },
        {
            display: "Duster",
            value: "Duster"
        },
        {
            display: "Express",
            value: "Express"
        },
        {
            display: "Fluence",
            value: "Fluence"
        },
        {
            display: "Grand Scénic",
            value: "Grand Scénic"
        },
        {
            display: "Kangoo",
            value: "Kangoo"
        },
        {
            display: "Kangoo Express",
            value: "Kangoo Express"
        },
        {
            display: "Laguna",
            value: "Laguna"
        },
        {
            display: "Laguna Grand Tour",
            value: "Laguna Grand Tour"
        },
        {
            display: "Laguna Nevada",
            value: "Laguna Nevada"
        },
        {
            display: "Logan",
            value: "Logan"
        },
        {
            display: "Master",
            value: "Master"
        },
        {
            display: "Megane",
            value: "Megane"
        },
        {
            display: "Megane Grand Tour",
            value: "Megane Grand Tour"
        },
        {
            display: "Megane Sedan",
            value: "Megane Sedan"
        },
        {
            display: "Sandero",
            value: "Sandero"
        },
        {
            display: "Scénic",
            value: "Scénic"
        },
        {
            display: "Symbol",
            value: "Symbol"
        },
        {
            display: "Trafic",
            value: "Trafic"
        },
        {
            display: "Twingo",
            value: "Twingo"
        }
    ];

    var Subaru = [
        {
            display: "Forester",
            value: "Forester"
        },
        {
            display: "Limpreza",
            value: "Limpreza"
        },
        {
            display: "Legacy",
            value: "Legacy"
        },
        {
            display: "Lagay SW",
            value: "Lagay SW"
        },
        {
            display: "Outback",
            value: "Outback"
        },
        {
            display: "SVX",
            value: "SVX"
        },
        {
            display: "Tribeca",
            value: "Tribeca"
        },
        {
            display: "Vivio",
            value: "Vivio"
        },
        {
            display: "XV",
            value: "XV"
        }
    ];

    var Toyota = [
        {
            display: "Avalon",
            value: "Avalon"
        },
        {
            display: "Bandeirante",
            value: "Bandeirante"
        },
        {
            display: "Camry",
            value: "Camry"
        },
        {
            display: "Celica",
            value: "Celica"
        },
        {
            display: "Corolla",
            value: "Corolla"
        },
        {
            display: "Corona",
            value: "Corona"
        },
        {
            display: "Etios",
            value: "Etios"
        },
        {
            display: "Land Cruiser",
            value: "Land Cruiser"
        },
        {
            display: "Land Cruiser Prado",
            value: "Land Cruiser Prado"
        },
        {
            display: "MR-2",
            value: "MR-2"
        },
        {
            display: "Paseo",
            value: "Paseo"
        },
        {
            display: "Previa",
            value: "Previa"
        },
        {
            display: "Prius",
            value: "Prius"
        },
        {
            display: "RAV4",
            value: "RAV4"
        },
        {
            display: "Supra",
            value: "Supra"
        },
        {
            display: "T-100",
            value: "T-100"
        }
    ];

    var Volkswagen = [
        {
            display: 'Virtus',
            value: 'Virtus'
        },
        {
            display: "Apolo",
            value: "Apolo"
        },
        {
            display: "Bora",
            value: "Bora"
        },
        {
            display: "Caravelle",
            value: "Caravelle"
        },
        {
            display: "Corrado",
            value: "Corrado"
        },
        {
            display: "Cro",
            value: "Cro"
        },
        {
            display: "Cross up!",
            value: "Cross up!"
        },
        {
            display: "Crossfox",
            value: "Crossfox"
        },
        {
            display: "Eos",
            value: "Eos"
        },
        {
            display: "Eurovan",
            value: "Eurovan"
        },
        {
            display: "Fox",
            value: "Fox"
        },
        {
            display: "Fusca",
            value: "Fusca"
        },
        {
            display: "Gol",
            value: "Gol"
        },
        {
            display: "Golf",
            value: "Golf"
        },
        {
            display: "Jetta",
            value: "Jetta"
        },
        {
            display: "Logus",
            value: "Logus"
        },
        {
            display: "New Beetle",
            value: "New Beetle"
        },
        {
            display: "Parati",
            value: "Parati"
        },
        {
            display: "Passat",
            value: "Passat"
        },
        {
            display: "Passat Variant",
            value: "Passat Variant"
        },
        {
            display: "Pointer",
            value: "Pointer"
        },
        {
            display: "Polo",
            value: "Polo"
        },
        {
            display: "Polo Sedan",
            value: "Polo Sedan"
        },
        {
            display: "Quantum",
            value: "Quantum"
        },
        {
            display: "Santana",
            value: "Santana"
        },
        {
            display: "SpaceCross",
            value: "SpaceCross"
        },
        {
            display: "Up!",
            value: "Up!"
        },
        {
            display: "Voyage",
            value: "Voyage"
        }
    ];

    // Function executes on change of first select option field.
    $("#marca").change(function () {
        var select = $("#marca option:selected").val();
        switch (select) {
            case "Audi":
                modelo(Audi);
                break;
            case "Chevrolet":
                modelo(Chevrolet);
                break;
            case "Citroen":
                modelo(Citroen);
                break;
            case "Fiat":
                modelo(Fiat);
                break;
            case "Ford":
                modelo(Ford);
                break;
            case "Honda":
                modelo(Honda);
                break;
            case "Hyundai":
                modelo(Hyundai);
                break;
            case "JacMotors":
                modelo(JacMotors);
                break;
            case "Kia":
                modelo(Kia);
                break;
            case "Lifan":
                modelo(Lifan);
                break;
            case "Nissan":
                modelo(Nissan);
                break;
            case "Peugeot":
                modelo(Peugeot);
                break;
            case "Renault":
                modelo(Renault);
                break;
            case "Subaru":
                modelo(Subaru);
                break;
            case "Toyota":
                modelo(Toyota);
                break;
            case "Volkswagen":
                modelo(Volkswagen);
                break;


            default:
                $("#modelo").empty();
                $("#modelo").append("<option>Selecione</option>");
                break;
        }
    });

    // Function To List out Cities in Second Select tags
    function modelo(arr) {
        $("#modelo").empty(); //To reset cities
        $("#modelo").append("<option>Selecione</option>");
        $(arr).each(function (i) { //to list cities
            $("#modelo").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
        });
    }
});