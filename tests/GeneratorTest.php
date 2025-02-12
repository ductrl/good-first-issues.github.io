<?php

declare(strict_types = 1);

namespace Tests;

use GoodFirstIssue\Generator;
use GoodFirstIssue\GitHubAPIClient;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoodFirstIssue\Generator
 */
final class GeneratorTest extends TestCase
{
    public function test_instance_of_generator(): void
    {
        $generator = new Generator(__DIR__, new GitHubAPIClient());

        $this->assertInstanceOf(Generator::class, $generator);
    }
}
