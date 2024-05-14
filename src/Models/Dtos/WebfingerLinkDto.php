<?php
    namespace Bearlovescode\Webfinger\Models\Dtos;

    use Bearlovescode\Datamodels\Dto\Dto;

    class WebfingerLinkDto extends Dto
    {
        public ?string $rel;
        public ?string $template;
        public string $type;
        public string $href;
    }