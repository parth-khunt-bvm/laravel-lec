<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetType;

class AssetTypeController extends Controller
{

    public function list(){
        $data = [];
        $data['asset_type'] = AssetType::all();
        return view('pages.asset-type.list', $data);
    }

    public function addAssest(){
        return view('pages.asset-type.add');
    }

    public function store(Request $postData)
    {
        // Validation
        $postData->validate([
            'type' => 'required|string|max:255',
            'short_code' => 'required|string|max:10|unique:asset_types,short_code',
            'status' => 'required|in:A,I',
        ],    
        [
            'type.required' => 'The asset type is required.',
            'type.string' => 'The asset type must be a valid string.',
            'type.max' => 'The asset type cannot exceed 255 characters.',
            'short_code.required' => 'The short code is required.',
            'short_code.string' => 'The short code must be a valid string.',
            'short_code.max' => 'The short code cannot exceed 10 characters.',
            'status.required' => 'The status is required.',
            'status.in' => 'The status must be either "A" (Active) or "I" (Inactive).',
        ]
        );

        // Store asset type in the database
        AssetType::create([
            'type' => $postData->type,
            'short_code' => $postData->short_code,
            'status' => $postData->status,
        ]);

        return redirect()->route('admin.asset.asset-type.list')->with('success', 'Asset added successfully');
    }

    public function updateAssest ($assestId){

        $assestDetails = AssetType::where('asset_types_id', $assestId)->first();
        return view('pages.asset-type.update', compact('assestDetails'));

    }


    public function update(Request $request)
    {
        // Retrieve the asset_types_id from the request
        $assestId = $request->asset_types_id;

        // Validation
        $request->validate([
            'type' => 'required|string|max:255',
            'short_code' => 'required|string|max:10', // ignore current id for unique check
            'status' => 'required|in:A,I', 
        ],
        [
            'type.required' => 'The asset type is required.',
            'type.string' => 'The asset type must be a valid string.',
            'type.max' => 'The asset type cannot exceed 255 characters.',
            'short_code.required' => 'The short code is required.',
            'short_code.string' => 'The short code must be a valid string.',
            'short_code.max' => 'The short code cannot exceed 10 characters.',
            'status.required' => 'The status is required.',
            'status.in' => 'The status must be either "A" (Active) or "I" (Inactive).',
        ]
        );

        // Find the asset type by ID and update it
        $assetType = AssetType::findOrFail($assestId);        
        $assetType->update([
            'type' => $request->type,
            'short_code' => $request->short_code,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.asset.asset-type.list')->with('success', 'Asset type updated successfully!');
    }



    public function deleteAssest($assestId)
    {
        // Attempt to delete the asset type
        $result = AssetType::where('asset_types_id', $assestId)->delete();

        // Check if the delete was successful
        if ($result) {
            // Flash success message
            return redirect()->route('admin.asset.asset-type.list')->with('success', 'Asset type deleted successfully!');
        } else {
            // Flash error message (if deletion fails for some reason)
            return redirect()->route('admin.asset.asset-type.list')->with('error', 'Failed to delete asset type!');
        }
    }

}
