<?php

namespace Others\Persistence;

class StringHistory
{
    private string $value;
    private \SplDoublyLinkedList $history;

    public function __construct()
    {
        $this->history = new \SplDoublyLinkedList();
    }

    private function addValueInHistory(string $value): void
    {
        $this->history->push($value);
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
        $this->addValueInHistory($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getHistoryCount(): int
    {
        return $this->history->count();
    }

    public function getHistoryList(): array
    {
        $list = [];
        $this->history->rewind();

        while($this->history->valid()) {
            $list[] = $this->history->current();
            $this->history->next();
        }

        return $list;
    }
}
