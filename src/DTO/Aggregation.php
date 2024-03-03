<?php

namespace Ismaelillodev\FathomAnalytics\DTO;


class Aggregation {
    public function __construct(
        public readonly string $entity,
        public readonly string $entity_id,
        public readonly string $aggregates,
        public readonly ?string $date_grouping = null,
        public readonly ?string $field_grouping = null,
        public readonly ?string $sort_by = null,
        public readonly ?string $timezone = null,
        public readonly ?string $date_from = null,
        public readonly ?string $date_to = null,
        public readonly ?int $limit = null
    ) {}


    public function toArray()
    {
        return [
            'entity' => $this->entity,
            'entity_id' => $this->entity_id,
            'aggregates' => $this->aggregates,
            'date_grouping' => $this->date_grouping,
            'field_grouping' => $this->field_grouping,
            'sort_by' => $this->sort_by,
            'timezone' => $this->timezone,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'limit' => $this->limit
        ];
    }

    public function toQueryParam() : array
    {
        $queryParams = [
            'entity' => $this->entity,
            'entity_id' => $this->entity_id,
            'aggregates' => $this->aggregates,
        ];

        if($this->field_grouping) {
            $queryParams['field_grouping'] = $this->field_grouping;
        }

        if($this->sort_by) {
            $queryParams['sort_by'] = $this->sort_by;
        }

        if($this->timezone) {
            $queryParams['timezone'] = $this->timezone;
        }

        if($this->date_from) {
            $queryParams['date_from'] = $this->date_from;
        }

        if($this->date_to) {
            $queryParams['date_to'] = $this->date_to;
        }

        if($this->limit) {
            $queryParams['limit'] = $this->limit;
        }

        if($this->date_grouping) {
            $queryParams['date_grouping'] = $this->date_grouping;
        }

        return $queryParams;
    }
}
