<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetType extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'asset_types';
    protected $primaryKey = 'asset_types_id';
    protected $softDelete = true;
    protected $fillable = [
        'type',
        'short_code',
        'status'
    ];

    public function addAssestType($requestData){
        $objAssetType = new AssetType();
        $objAssetType->type = $requestData['type'];
        $objAssetType->short_code = $requestData['short_code'];
        $objAssetType->status = $requestData['status'];
        $objAssetType->created_at = $requestData['created_at'];
        $objAssetType->updated_at = $requestData['updated_at'];
        return $objAssetType->save();
    }   
    
    public function updateAssestType($requestData){
        $objAssetType = AssetType::find($requestData['asset_types_id']);
        $objAssetType->type = $requestData['type'];
        $objAssetType->short_code = $requestData['short_code'];
        $objAssetType->status = $requestData['status'];
        $objAssetType->updated_at = $requestData['updated_at'];
        return $objAssetType->save();
    }   
}
