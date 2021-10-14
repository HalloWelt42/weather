<?php
declare(strict_types=1);

use WTR\SplFileFactory;
use WTR\StationDecoder;
use WTR\StationStreamer;
use WTR\WeatherStationFactory;

require_once __DIR__ . '/../vendor/autoload.php';


$dic         = [];
$dic['file'] = function () {
  return __DIR__ . '/data/mosmix_stationskatalog.txt';
};

/**
 * @return SplFileFactory
 */
$dic[SplFileFactory::class] = function () use ($dic) {
  return (new SplFileFactory());
};

/**
 * @return WeatherStationFactory
 */
$dic[WeatherStationFactory::class] = function () {
  return new WeatherStationFactory();
};

/**
 * Decoder-Service
 *  dekodiert Zeileweise Daten zu Objekten
 *
 * @return StationDecoder
 */
$dic[StationDecoder::class] = function () use ($dic) {
  return new StationDecoder( $dic[WeatherStationFactory::class]());
};


$dic[StationStreamer::class] = function () use ($dic) {
  return new StationStreamer(
    $dic[StationDecoder::class](),
    $dic[SplFileFactory::class]()
  );
};


$dic[StationStreamer::class]();

//$station = $dic[StationDecoder::class]($string);
//print_r($station);

#https://www.dwd.de/DE/leistungen/met_verfahren_mosmix/mosmix_stationskatalog.cfg?view=nasPublication&nn=161

