<?php

declare(strict_types = 1);

namespace GoodFirstIssue\DTO;

readonly class Issue
{
    public function __construct(
        public string $html_url,
        public string $title,
        public int $number,
        public string $updated_at
    ) {
    }
}
