{
    "name": "myIndexer",
    "dataSourceName": "myDataSource",
    "targetIndexName": "myIndex",
    "skillsetName": "mySkillSet",
    "fieldMappings": [
      {
        "sourceFieldName": "metadata_storage_path",
        "targetFieldName": "id",
        "mappingFunction": {
          "name": "base64Encode"
        }
      }
    ]
  }
  {
    "name": "My-Search",
    "fields": [
      {
      "name": "Search",
      "type": "Edm.String",
      "key": true,
      "searchable": true,
      "filterable": true,
      "facetable": true,
      "sortable": true
      },
      {
      "name": "search1",
      "type": "Edm.String",
      "searchable": true,
      "filterable": true,
      "facetable": true,
      "sortable": true
      }
    ]
  }