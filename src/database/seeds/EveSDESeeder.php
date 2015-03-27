<?php

use Illuminate\Database\Seeder;

class EveSDESeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call('AgtAgentTypesSeeder');
        $this->call('AgtAgentsSeeder');
        $this->call('AgtResearchAgentsSeeder');
        $this->call('ChrAncestriesSeeder');
        $this->call('ChrAttributesSeeder');
        $this->call('ChrBloodlinesSeeder');
        $this->call('ChrFactionsSeeder');
        $this->call('ChrRacesSeeder');
        $this->call('CrpActivitiesSeeder');
        $this->call('CrpNPCCorporationDivisionsSeeder');
        $this->call('CrpNPCCorporationResearchFieldsSeeder');
        $this->call('CrpNPCCorporationTradesSeeder');
        $this->call('CrpNPCCorporationsSeeder');
        $this->call('CrpNPCDivisionsSeeder');
        $this->call('DgmAttributeCategoriesSeeder');
        $this->call('DgmAttributeTypesSeeder');
        $this->call('DgmEffectsSeeder');
        $this->call('DgmExpressionsSeeder');
        $this->call('DgmTypeAttributesSeeder');
        $this->call('DgmTypeEffectsSeeder');
        $this->call('EveUnitsSeeder');
        $this->call('InvCategoriesSeeder');
        $this->call('InvContrabandTypesSeeder');
        $this->call('InvControlTowerResourcePurposesSeeder');
        $this->call('InvControlTowerResourcesSeeder');
        $this->call('InvFlagsSeeder');
        $this->call('InvGroupsSeeder');
        $this->call('InvItemsSeeder');
        $this->call('InvMarketGroupsSeeder');
        $this->call('InvMetaGroupsSeeder');
        $this->call('InvMetaTypesSeeder');
        $this->call('InvNamesSeeder');
        $this->call('InvPositionsSeeder');
        $this->call('InvTypeMaterialsSeeder');
        $this->call('InvTypeReactionsSeeder');
        $this->call('InvTypesSeeder');
        $this->call('InvUniqueNamesSeeder');
        $this->call('MapCelestialStatisticsSeeder');
        $this->call('MapConstellationJumpsSeeder');
        $this->call('MapConstellationsSeeder');
        $this->call('MapDenormalizeSeeder');
        $this->call('MapJumpsSeeder');
        $this->call('MapLandmarksSeeder');
        $this->call('MapLocationScenesSeeder');
        $this->call('MapLocationWormholeClassesSeeder');
        $this->call('MapRegionJumpsSeeder');
        $this->call('MapRegionsSeeder');
        $this->call('MapSolarSystemJumpsSeeder');
        $this->call('MapSolarSystemsSeeder');
        $this->call('MapUniverseSeeder');
        $this->call('PlanetSchematicsSeeder');
        $this->call('PlanetSchematicsPinMapSeeder');
        $this->call('PlanetSchematicsTypeMapSeeder');
        $this->call('RamActivitiesSeeder');
        $this->call('RamAssemblyLineStationsSeeder');
        $this->call('RamAssemblyLineTypeDetailPerCategorySeeder');
        $this->call('RamAssemblyLineTypeDetailPerGroupSeeder');
        $this->call('RamAssemblyLineTypesSeeder');
        $this->call('RamInstallationTypeContentsSeeder');
        $this->call('StaOperationServicesSeeder');
        $this->call('StaOperationsSeeder');
        $this->call('StaServicesSeeder');
        $this->call('StaStationTypesSeeder');
        $this->call('StaStationsSeeder');
        $this->call('TranslationTablesSeeder');
        $this->call('TrnTranslationColumnsSeeder');
        $this->call('TrnTranslationLanguagesSeeder');
        $this->call('TrnTranslationsSeeder');
        $this->call('WarCombatZoneSystemsSeeder');
        $this->call('WarCombatZonesSeeder');
    }

}
