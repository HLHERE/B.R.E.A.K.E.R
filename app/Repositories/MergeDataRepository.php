<?php

// GuardianApiService.php

namespace App\Repositories;


class MergeDataRepository
{
  private $localService;

  public function __construct(PostDataProcessor $localService)
  {
    $this->localService = $localService;
  }

  public function mergeProcessedData($localData, $apiData)
  {
    // Proses data lokal
    $localProcessed = $localData->map(function ($item) {
      return $this->localService->processLocalData($item);
    });

    // Gabungkan kedua set data
    $mergedData = $apiData->merge($localProcessed);

    // Acak urutan data
    $shuffledData = $mergedData->shuffle();

    return $shuffledData;
  }
}
