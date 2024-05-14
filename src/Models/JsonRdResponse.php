<?php
    namespace Bearlovescode\Webfinger\Models;

    use Bearlovescode\Datamodels\Dto\Dto;

    class JsonRdResponse extends Dto
    {
        public string $subject = '';
        public ?array $aliases;
        public ?array $properties;
        public ?array $links;
    }