<?php

namespace App\VoteSystem\Repositories;

use App\VoteSystem\Models\VoterPropositionOption;
use Illuminate\Support\Collection;

class VoterPropositionOptionRepository
{
    public function insert(Collection $voterPropositionOptions): bool
    {
        return VoterPropositionOption::insert(
            $voterPropositionOptions->toArray()
        );
    }
}