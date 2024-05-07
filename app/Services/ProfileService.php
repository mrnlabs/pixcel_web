<?php

namespace App\Services;

use App\Models\Profile;

class ProfileService
{
    public function getAllProfiles()
    {
        return Profile::all();
    }

    public function createProfile(array $data)
    {
        Profile::create($data);
        return "Profile created successfully!";
    }

    public function getProfile($profileId)
    {
        return Profile::find($profileId);
    }

    public function updateProfile($profileId, array $data)
    {
        $profile = Profile::find($profileId);

        if (!$profile) {
            return false; // Profile not found
        }

        $profile->update($data);
        return "Profile updated successfully!";
    }

    public function deleteProfile($profileId)
    {
        $profile = Profile::find($profileId);

        if (!$profile) {
            return false; // Profile not found
        }

        $profile->delete();
        return true;
    }
}

