<?php

use App\Models\Job;

it('belongs to an employer', function () {
    // Arrange
    $employer = App\Models\Employer::factory()->create();
    $job = App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // Act & Assert
    expect($job->employer->is($employer))->toBeTrue();
});

    it('can have tags', function () {
        // AAA
        // Arrange
        $job = Job::factory()->create();
        // Act
        $job->tag('Frontend');
        // Assert
        expect($job->tags)->toHaveCount(1);
    });

