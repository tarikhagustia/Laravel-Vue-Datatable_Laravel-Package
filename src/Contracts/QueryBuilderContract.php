<?php

namespace JamesDordoy\LaravelVueDatatable\Contracts;

interface QueryBuilderContract {
    function selectData($dataTableColumns = [], $dataTableRelationships = []);
    function orderBy($orderBy, $orderByDir = "asc");
    function addRelationships($declaredRelationship);
    function filter($searchValue);
}