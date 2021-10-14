<?php


namespace WTR;


use SplFileObject;

class StationStreamer
{

  private StationDecoder $station_decoder;
  private SplFileFactory $source;


  public function __construct(StationDecoder $station_decoder, SplFileFactory $source)
  {
    $this->station_decoder = $station_decoder;

//    $string = '99803     8 EW002 ---- Beveringen            53.10   12.13    71        LAND';
//    $this->station_decoder->setStationDataLine($string);
//    $this->station_decoder->init();
    $this->source = $source;

    $file = $this->source->createSplFile(__DIR__ . '/../weather_data/mosmix_stationskatalog.txt');

    foreach ($file as $line){
      print_r($line);
    }

    echo PHP_EOL;
  }


}