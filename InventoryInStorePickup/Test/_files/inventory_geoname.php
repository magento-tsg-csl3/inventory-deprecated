<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\Framework\App\ResourceConnection;
use Magento\TestFramework\Helper\Bootstrap;

/** @var ResourceConnection $resource */
$resource = Bootstrap::getObjectManager()->get(ResourceConnection::class);

$sql = "
INSERT INTO `%s` (`country_code`, `postcode`, `city`, `region`, `province`, `latitude`, `longitude`)
VALUES
	('DE', '72532', 'Gomadingen', 'Baden-Württemberg', '084', 48.3998, 9.3906),
	('DE', '93354', 'Siegenburg', 'Bayern', '092', 48.7542, 11.8483),
	('DE', '57520', 'Friedewald', 'Rheinland-Pfalz', '00', 50.7111, 7.9604),
	('DE', '39517', 'Ringfurth', 'Sachsen-Anhalt', '00', 52.3807, 11.9037),
	('DE', '06369', 'Weißandt-Gölzau', 'Sachsen-Anhalt', '00', 51.6707, 12.0734),
	('DE', '01619', 'Röderaue', 'Sachsen', '00', 51.3875, 13.4583),
	('DE', '56593', 'Güllesheim', 'Rheinland-Pfalz', '00', 50.5978, 7.5286),
	('DE', '94099', 'Ruhstorf an der Rott', 'Bayern', '092', 48.4333, 13.3333),
	('DE', '06926', 'Reicho', 'Sachsen-Anhalt', '00', 51.8064, 13.1171),
	('DE', '06388', 'Piethen', 'Sachsen-Anhalt', '00', 51.6726, 11.9306),
	('DE', '25593', 'Reher', 'Schleswig-Holstein', '00', 54.0667, 9.5833),
	('DE', '29456', 'Hitzacker', 'Niedersachsen', '00', 53.1598, 10.9995),
	('DE', '09430', 'Venusberg', 'Sachsen', '00', 50.6992, 13.0185),
	('DE', '02747', 'Herrnhut', 'Sachsen', '00', 51.0162, 14.7438),
	('DE', '53229', 'Bonn', 'Nordrhein-Westfalen', '053', 50.7323, 7.1847),
	('DE', '55471', 'Sargenroth', 'Rheinland-Pfalz', '00', 49.9333, 7.5167),
	('DE', '49152', 'Bad Essen', 'Niedersachsen', '00', 52.3175, 8.413),
	('DE', '92712', 'Pirk', 'Bayern', '093', 49.6333, 12.1667),
	('DE', '50968', 'Köln', 'Nordrhein-Westfalen', '053', 50.9033, 6.9647),
	('DE', '15377', 'Oberbarnim', 'Brandenburg', '00', 52.5938, 14.0355),
	('DE', '96257', 'Redwitz an der Rodach', 'Bayern', '094', 50.1732, 11.2083),
	('DE', '99869', 'Wangenheim', 'Thüringen', '00', 51.0198, 10.6242),
	('DE', '35329', 'Gemünden (Felda)', 'Hessen', '065', 50.7, 9.05),
	('DE', '68794', 'Oberhausen-Rheinhausen', 'Baden-Württemberg', '082', 49.2739, 8.4717),
	('DE', '31139', 'Hildesheim', 'Niedersachsen', '00', 52.141, 9.9407),
	('DE', '91593', 'Burgbernheim', 'Bayern', '095', 49.451, 10.3239),
	('DE', '38489', 'Rohrberg', 'Sachsen-Anhalt', '00', 52.7075, 11.0409),
	('DE', '15806', 'Mellensee', 'Brandenburg', '00', 52.1833, 13.43),
	('DE', '26629', 'Großefehn Fiebing', 'Niedersachsen', '00', 53.3498, 7.6792),
	('DE', '21037', 'Hamburg Ochsenwerder', 'Hamburg', '00', 53.4719, 10.0942),
	('DE', '04155', 'Leipzig', 'Sachsen', '00', 51.3667, 12.3833),
	('DE', '25840', 'Koldenbüttel', 'Schleswig-Holstein', '00', 54.3833, 9.0667),
	('DE', '59394', 'Nordkirchen', 'Nordrhein-Westfalen', '055', 51.7383, 7.522),
	('DE', '70327', 'Stuttgart', 'Baden-Württemberg', '081', 48.7667, 9.1833),
	('DE', '88633', 'Heiligenberg', 'Baden-Württemberg', '084', 47.8209, 9.3128),
	('DE', '28759', 'Bremen', 'Bremen', '00', 53.1094, 8.7814),
	('DE', '22087', 'Hamburg Hamm-Nord', 'Hamburg', '00', 53.5603, 10.0511),
	('DE', '86559', 'Adelzhausen', 'Bayern', '097', 48.3567, 11.1385),
	('DE', '26419', 'Schortens Roffhausen', 'Niedersachsen', '00', 53.5274, 8.0359),
	('DE', '57645', 'Nister', 'Rheinland-Pfalz', '00', 50.6758, 7.8383),
	('DE', '81671', 'München', 'Bayern', '091', 48.1223, 11.6205),
	('DE', '54668', 'Ferschweiler', 'Rheinland-Pfalz', '00', 49.8667, 6.4),
	('DE', '29323', 'Wietze', 'Niedersachsen', '00', 52.65, 9.8333),
	('DE', '16835', 'Lindow (Mark) Schönberg (Mark)', 'Brandenburg', '00', 52.9333, 12.9667),
	('DE', '56337', 'Simmern', 'Rheinland-Pfalz', '00', 50.3891, 7.674),
	('DE', '54518', 'Plein', 'Rheinland-Pfalz', '00', 50.0333, 6.8667),
	('DE', '54673', 'Berscheid', 'Rheinland-Pfalz', '00', 49.9833, 6.2333),
	('DE', '89176', 'Asselfingen', 'Baden-Württemberg', '084', 48.5296, 10.1917),
	('DE', '17291', 'Schönfeld', 'Brandenburg', '00', 53.4136, 13.9857),
	('DE', '55596', 'Oberstreit', 'Rheinland-Pfalz', '00', 49.8, 7.7),
	('IT', '22010', 'Grandola Ed Uniti', 'Lombardia', 'CO', 46.0249, 9.2127),
	('IT', '00040', 'Santa Maria Delle Mole', 'Lazio', 'RM', 41.7778, 12.5919),
	('IT', '12022', 'San Chiaffredo', 'Piemonte', 'CN', 44.4796, 7.502),
	('IT', '39030', 'Rasun Di Sotto', 'Trentino-Alto Adige', 'BZ', 46.7781, 12.0522),
	('IT', '84011', 'Pogerola Di Amalfi', 'Campania', 'SA', 40.6349, 14.6024),
	('IT', '87067', 'Rossano', 'Calabria', 'CS', 39.5762, 16.6345),
	('IT', '12070', 'Battifollo', 'Piemonte', 'CN', 44.3198, 8.0109),
	('IT', '26844', 'Cavacurta', 'Lombardia', 'LO', 45.1898, 9.7419),
	('IT', '16029', 'Laccio', 'Liguria', 'GE', 44.4942, 9.1298),
	('IT', '32032', 'Tomo', 'Veneto', 'BL', 46.0042, 11.8939),
	('IT', '38047', 'Valcava', 'Trentino-Alto Adige', 'TN', 46.2064, 11.3119),
	('IT', '30122', 'Castello', 'Veneto', 'VE', 45.4318, 12.3561),
	('IT', '23887', 'Olgiate Molgora', 'Lombardia', 'LC', 45.7303, 9.4033),
	('IT', '30034', 'Gambarare', 'Veneto', 'VE', 45.444, 12.1371),
	('IT', '71033', 'Casalnuovo Monterotaro', 'Puglia', 'FG', 41.6194, 15.1041),
	('IT', '62020', 'Caldarola', 'Marche', 'MC', 43.1428, 13.2237),
	('IT', '21040', 'Gerenzano', 'Lombardia', 'VA', 45.6397, 9.001),
	('IT', '21020', 'Bardello', 'Lombardia', 'VA', 45.836, 8.6968),
	('IT', '67100', 'San Gregorio', 'Abruzzi', 'AQ', 42.327, 13.4953),
	('IT', '53045', 'Montepulciano', 'Toscana', 'SI', 43.1, 11.787),
	('IT', '16133', 'Apparizione', 'Liguria', 'GE', 44.4056, 8.9996),
	('IT', '87030', 'Domanico', 'Calabria', 'CS', 39.2169, 16.2072),
	('IT', '06081', 'Viole Di Assisi', 'Umbria', 'PG', 43.0665, 12.5807),
	('IT', '47015', 'Santa Reparata', 'Emilia-Romagna', 'FC', 44.1595, 11.7929),
	('IT', '25070', 'Casto', 'Lombardia', 'BS', 45.6949, 10.3212),
	('IT', '48032', 'Casola Valsenio', 'Emilia-Romagna', 'RA', 44.2244, 11.6249),
	('IT', '19133', 'Laspezia', 'Liguria', 'SP', 44.0967, 9.7753),
	('IT', '56038', 'Giardino', 'Toscana', 'PI', 43.5022, 10.6669),
	('IT', '47834', 'Serbadone', 'Emilia-Romagna', 'RN', 43.8983, 12.636),
	('IT', '63827', 'Pedaso', 'Marche', 'FM', 43.0984, 13.8408),
	('IT', '41032', 'Motta', 'Emilia-Romagna', 'MO', 44.8254, 10.9974),
	('IT', '45030', 'Ceneselli', 'Veneto', 'RO', 45.0138, 11.3694),
	('IT', '09040', 'San Nicolo\' Gerrei', 'Sardegna', 'CA', 39.2071, 9.1074),
	('IT', '80022', 'Arzano', 'Campania', 'NA', 40.9096, 14.2652),
	('IT', '89020', 'Melicucca\'', 'Calabria', 'RC', 38.3031, 15.8815),
	('IT', '87076', 'Villapiana', 'Calabria', 'CS', 39.8457, 16.4553),
	('IT', '28060', 'Cameriano', 'Piemonte', 'NO', 45.3966, 8.5374),
	('IT', '55051', 'Barga', 'Toscana', 'LU', 44.0731, 10.4779),
	('IT', '89013', 'Gioia Tauro', 'Calabria', 'RC', 38.4251, 15.8975),
	('IT', '24129', 'Bergamo', 'Lombardia', 'BG', 45.696, 9.6672),
	('IT', '50059', 'Vinci', 'Toscana', 'FI', 43.7813, 10.9237),
	('IT', '04010', 'Sonnino Scalo', 'Lazio', 'LT', 41.4325, 13.1993),
	('IT', '40013', 'Villa Salina', 'Emilia-Romagna', 'BO', 44.5545, 11.3518),
	('IT', '15049', 'Vignale Monferrato', 'Piemonte', 'AL', 45.01, 8.397),
	('IT', '85028', 'Monticchio', 'Basilicata', 'PZ', 40.9362, 15.6203),
	('IT', '27030', 'Villanova D\'Ardenghi', 'Lombardia', 'PV', 45.1705, 9.0408),
	('IT', '12050', 'Bosia', 'Piemonte', 'CN', 44.6024, 8.1473),
	('IT', '32036', 'Mas', 'Veneto', 'BL', 46.1519, 12.1296),
	('IT', '30020', 'Pramaggiore', 'Veneto', 'VE', 45.815, 12.7389),
	('IT', '39024', 'Malles Venosta', 'Trentino-Alto Adige', 'BZ', 46.6879, 10.5466),
	('FR', '57220', 'Boulay-Moselle', 'Grand Est', '57', 49.1833, 6.5),
	('FR', '86210', 'La Chapelle-Moulière', 'Nouvelle-Aquitaine', '86', 46.649, 0.5666),
	('FR', '39160', 'Montagna-le-Reconduit', 'Bourgogne-Franche-Comté', '39', 46.4584, 5.3862),
	('FR', '38080', 'Saint-Alban-de-Roche', 'Auvergne-Rhône-Alpes', '38', 45.5953, 5.223),
	('FR', '62159', 'Vaulx-Vraucourt', 'Hauts-de-France', '62', 50.1491, 2.9083),
	('FR', '63230', 'Pulvérières', 'Auvergne-Rhône-Alpes', '63', 45.8846, 2.9097),
	('FR', '57580', 'Han-sur-Nied', 'Grand Est', '57', 48.9904, 6.4369),
	('FR', '14430', 'Douville-en-Auge', 'Normandie', '14', 49.2608, -0.0234),
	('FR', '35539 CEDEX', 'Noyal-sur-Vilaine', 'Bretagne', '35', 48.1122, -1.5233),
	('FR', '95640', 'Haravilliers', 'Île-de-France', '95', 49.1733, 2.0548),
	('FR', '25580', 'Lavans-Vuillafans', 'Bourgogne-Franche-Comté', '25', 47.0868, 6.2437),
	('FR', '13652 CEDEX', 'Salon-de-Provence', 'Provence-Alpes-Côte d\'Azur', '13', 43.6407, 5.0954),
	('FR', '92638 CEDEX', 'Gennevilliers', 'Île-de-France', '92', 48.9333, 2.3),
	('FR', '38350', 'Saint-Honoré', 'Auvergne-Rhône-Alpes', '38', 44.9426, 5.8164),
	('FR', '21310', 'Savolles', 'Bourgogne-Franche-Comté', '21', 47.3759, 5.2743),
	('FR', '77292 CEDEX', 'Mitry-Mory', 'Île-de-France', '77', 48.9833, 2.6167),
	('FR', '67320', 'Pfalzweyer', 'Grand Est', '67', 48.8061, 7.2601),
	('FR', '12260', 'Montsalès', 'Occitanie', '12', 44.4911, 1.9613),
	('FR', '41370', 'Marchenoir', 'Centre-Val de Loire', '41', 47.8239, 1.3959),
	('FR', '09120', 'Gudas', 'Occitanie', '09', 43.0038, 1.6768),
	('FR', '44373 CEDEX 3', 'Nantes', 'Pays de la Loire', '44', 47.2173, -1.5534),
	('FR', '17500', 'Moings', 'Nouvelle-Aquitaine', '17', 45.4833, -0.35),
	('FR', '14250', 'Juvigny-sur-Seulles', 'Normandie', '14', 49.1617, -0.6148),
	('FR', '56290', 'Port-Louis', 'Bretagne', '56', 47.707, -3.3548),
	('FR', '31120', 'Roques', 'Occitanie', '31', 43.501, 1.3714),
	('FR', '64470', 'Camou-Cihigue', 'Nouvelle-Aquitaine', '64', 43.1164, -0.9063),
	('FR', '24100', 'Creysse', 'Nouvelle-Aquitaine', '24', 44.8547, 0.5658),
	('FR', '71240', 'Étrigny', 'Bourgogne-Franche-Comté', '71', 46.5904, 4.8038),
	('FR', '02360', 'Morgny-en-Thiérache', 'Hauts-de-France', '02', 49.7599, 4.0768),
	('FR', '12510', 'Druelle', 'Occitanie', '12', 44.3601, 2.5051),
	('FR', '07190', 'Marcols-les-Eaux', 'Auvergne-Rhône-Alpes', '07', 44.8157, 4.4007),
	('FR', '60028 CEDEX', 'Beauvais', 'Hauts-de-France', '60', 49.4333, 2.0833),
	('FR', '24330', 'Bassillac', 'Nouvelle-Aquitaine', '24', 45.193, 0.8153),
	('FR', '35033 CEDEX 9', 'Rennes', 'Bretagne', '35', 48.112, -1.6743),
	('FR', '44141 CEDEX', 'Châteaubriant', 'Pays de la Loire', '44', 47.7167, -1.3833),
	('FR', '51170', 'Magneux', 'Grand Est', '51', 49.3062, 3.7231),
	('FR', '55290', 'Mandres-en-Barrois', 'Grand Est', '55', 48.4907, 5.3914),
	('FR', '10154 CEDEX', 'Pont-Sainte-Marie', 'Grand Est', '10', 48.3185, 4.0945),
	('FR', '80310', 'Le Mesge', 'Hauts-de-France', '80', 49.9455, 2.0526),
	('FR', '34160', 'Buzignargues', 'Occitanie', '34', 43.7711, 4.0056),
	('FR', '26160', 'La Bégude-de-Mazenc', 'Auvergne-Rhône-Alpes', '26', 44.5457, 4.9361),
	('FR', '71390', 'Fley', 'Bourgogne-Franche-Comté', '71', 46.6698, 4.6406),
	('FR', '74150', 'Massingy', 'Auvergne-Rhône-Alpes', '74', 45.8294, 5.9193),
	('FR', '49140', 'Villevêque', 'Pays de la Loire', '49', 47.5609, -0.4238),
	('FR', '87049 CEDEX 1', 'Limoges', 'Nouvelle-Aquitaine', '87', 45.8315, 1.2578),
	('FR', '61130', 'Le Gué-de-la-Chaîne', 'Normandie', '61', 48.374, 0.5202),
	('FR', '89200', 'Sauvigny-le-Bois', 'Bourgogne-Franche-Comté', '89', 47.5137, 3.9406),
	('FR', '64220', 'Jaxu', 'Nouvelle-Aquitaine', '64', 43.1964, -1.1933),
	('FR', '52200', 'Champigny-lès-Langres', 'Grand Est', '52', 47.8945, 5.3464),
	('FR', '84490', 'Saint-Saturnin-lès-Apt', 'Provence-Alpes-Côte d\'Azur', '84', 43.9333, 5.3833),
	('US', '39168', 'Taylorsville', 'Mississippi', '129', 31.8394, -89.4049),
	('US', '49011', 'Athens', 'Michigan', '025', 42.103, -85.2317),
	('US', '11228', 'Brooklyn', 'New York', '047', 40.6174, -74.0121),
	('US', '40010', 'Buckner', 'Kentucky', '185', 38.3735, -85.4507),
	('US', '27198', 'Winston-Salem', 'North Carolina', '067', 36.0275, -80.2073),
	('US', '16881', 'Woodland', 'Pennsylvania', '033', 41.0098, -78.3214),
	('US', '52345', 'Urbana', 'Iowa', '011', 42.2365, -91.8881),
	('US', '75394', 'Dallas', 'Texas', '113', 32.7673, -96.7776),
	('US', '89310', 'Austin', 'Nevada', '015', 39.508, -117.0811),
	('US', '62821', 'Carmi', 'Illinois', '193', 38.0808, -88.167),
	('US', '95355', 'Modesto', 'California', '099', 37.6717, -120.9482),
	('US', '42060', 'Lovelaceville', 'Kentucky', '007', 36.9687, -88.8309),
	('US', '96730', 'Kaaawa', 'Hawaii', '003', 21.5481, -157.8495),
	('US', '28287', 'Charlotte', 'North Carolina', '119', 35.26, -80.8042),
	('US', '16644', 'Glasgow', 'Pennsylvania', '021', 40.7178, -78.4637),
	('US', '42140', 'Gamaliel', 'Kentucky', '171', 36.654, -85.8134),
	('US', '16223', 'Distant', 'Pennsylvania', '005', 40.9695, -79.3567),
	('US', '97761', 'Warm Springs', 'Oregon', '031', 44.7468, -121.2909),
	('US', '08242', 'Rio Grande', 'New Jersey', '009', 39.0196, -74.8756),
	('US', '56671', 'Redlake', 'Minnesota', '007', 47.8654, -95.0643),
	('US', '41143', 'Grayson', 'Kentucky', '043', 38.3326, -82.9485),
	('US', '56710', 'Alvarado', 'Minnesota', '089', 48.202, -96.9915),
	('US', '29316', 'Boiling Springs', 'South Carolina', '083', 35.0465, -81.9818),
	('US', '60924', 'Cissna Park', 'Illinois', '075', 40.5858, -87.8759),
	('US', '13848', 'Tunnel', 'New York', '007', 42.2147, -75.7277),
	('US', '66067', 'Ottawa', 'Kansas', '059', 38.6142, -95.2745),
	('US', '65054', 'Loose Creek', 'Missouri', '151', 38.4717, -91.9591),
	('US', '83255', 'Moore', 'Idaho', '023', 43.7296, -113.4544),
	('US', '71646', 'Hamburg', 'Arkansas', '003', 33.2058, -91.8023),
	('US', '99791', 'Atqasuk', 'Alaska', '185', 70.4947, -157.4411),
	('US', '32862', 'Orlando', 'Florida', '095', 28.5383, -81.3792),
	('US', '46275', 'Indianapolis', 'Indiana', '097', 39.7795, -86.1328),
	('US', '95441', 'Geyserville', 'California', '097', 38.7173, -122.8834),
	('US', '75851', 'Lovelady', 'Texas', '225', 31.0564, -95.5501),
	('US', '49676', 'Rapid City', 'Michigan', '079', 44.8449, -85.2943),
	('US', '70592', 'Youngsville', 'Louisiana', '055', 30.0975, -92.0096),
	('US', '99506', 'Jber', 'Alaska', '020', 59.8666, -158.5996),
	('US', '04460', 'Medway', 'Maine', '019', 45.607, -68.5227),
	('US', '93405', 'San Luis Obispo', 'California', '079', 35.2901, -120.6817),
	('US', '80512', 'Bellvue', 'Colorado', '069', 40.6265, -105.261),
	('US', '25054', 'Dawes', 'West Virginia', '039', 38.1429, -81.4521),
	('US', '41317', 'Clayhole', 'Kentucky', '025', 37.4476, -83.1892),
	('US', '17039', 'Kleinfeltersville', 'Pennsylvania', '075', 40.3005, -76.2584),
	('US', '66713', 'Baxter Springs', 'Kansas', '021', 37.0281, -94.7393),
	('US', '09609', 'FPO AE', '', '', 41.2141, 13.5708),
	('US', '36425', 'Beatrice', 'Alabama', '099', 31.7273, -87.1719),
	('US', '35543', 'Bear Creek', 'Alabama', '093', 34.1649, -87.7396),
	('US', '92227', 'Brawley', 'California', '025', 32.9792, -115.5296),
	('US', '45039', 'Maineville', 'Ohio', '165', 39.317, -84.2438),
	('US', '19195', 'Philadelphia', 'Pennsylvania', '101', 39.9525, -75.1645);
";

$connection = $resource->getConnection();
$tableName = $resource->getTableName('inventory_geoname');

$connection->query(sprintf($sql, $tableName))->execute();