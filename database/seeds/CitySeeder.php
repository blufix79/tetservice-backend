<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cities = array(
            array('comune' => 'Armungia', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Assemini', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Ballao', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Barrali', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Burcei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Cagliari', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Capoterra', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Castiadas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Decimomannu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Decimoputzu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Dolianova', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Domus de Maria', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Donori', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Elmas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Escalaplano', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Escolca', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Esterzili', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Gergei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Gesico', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Goni', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Guamaggiore', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Guasila', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Isili', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Mandas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Maracalagonis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Monastir', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Monserrato', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Muravera', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nuragos', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nurallao', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nuraminis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nurri', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Orroli', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Ortacesus', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Pimentel', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Pula', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Quartu S. Elena', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Quartucciu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sadali', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Samatzai', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'San Basilio', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S. Nicolò Gerrei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'San Sperate', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'San Vito', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S. Andrea Frius', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sarroch', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Selargius', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Selegas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Senorbì', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Serdiana', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Serri', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sestu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Settimo S. Pietro', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Seulo', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Siliqua', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Silius', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sinnai', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Siurgus Donigala', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Soleminis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Suelli', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Teulada', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Ussana', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Uta', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Vallermosa', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villa San Pietro', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villanova Tulo', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villaputzu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villasalto', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villasimius', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villasor', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villaspeciosa', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Barumini', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Iglesias', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Guspini', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Calasetta', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S. Antioco', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Carbonia', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Masainas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S. Anna Arresi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Foxi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Pirri', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Gonnesa', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Tratalias', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'San Giovanni Suergiu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Lunamatrona', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Gonnosfanadiga', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Furtei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villarios', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Portoscuso', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Cortoghiana', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Selegas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Su Planu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Poggio dei pini', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villacidro', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Samassi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Serrenti', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Santadi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nuraxi Figus', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villaperuccio', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Rio San Girolamo', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Paringianu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villamassargia', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Santa Margherita', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Perdaxius', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'La Maddalena Spiaggia', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Bacu Abis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nuxis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Narcao', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Domusnovas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Barbusi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Musei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Turri', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sardara', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Frutti d\'oro', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Torre degli ulivi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Is Gannus', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Piscinas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Flumentepido', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Matzaccara', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villanovafranca', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Genoni', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Rio Murtas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Serbariu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Nebida', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Porto Columbu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Bugerru', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Gesturi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Giba', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sanluri', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Laconi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Carloforte', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Serramanna', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'San Gavino Monreale', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Senorbì', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Is molas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Is molas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Ussaramanna', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Ussaramanna', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S.G. Monnreale', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S\'Isidoro', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S. Isidoro', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sisini', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Arbus', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Arbus', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'SENORBI', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Segariu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Pabillonis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'S.N.Gerrei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Fluminimaggiore', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Suelli', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Las Plassas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Su Spantu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Perd\'e Sali', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Residenza del Sole', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Tuili', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Flumini di Quartu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Collinas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Barracca Manna', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Margine Rosso', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Geremeas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Siddi', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Lott. Picciau', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Chia', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Residenza del Poggio', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Corte Xandra', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Su Spantu 2', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Oliaspeciosa', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Capitana', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Pauli Arbarei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Terraseo', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villanovaforru', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sa Tiacca', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Solanas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Solanas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Solanas', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Pistis', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Porto pino ', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Su Spantu 3', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Villamar', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Macchiareddu', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Torre delle Stelle', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Costa Rei', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'San Priamo', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Torre dei Corsari', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Stella di mare 2', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Oristano', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Genuri', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Costa degli Angeli ', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Is Gannaus', 'created_at' => now(), 'updated_at' => now()),
            array('comune' => 'Sant\'Antonio di Santadi ', 'created_at' => now(), 'updated_at' => now())
        );

        DB::table('cities')->insert($cities);
    }
}