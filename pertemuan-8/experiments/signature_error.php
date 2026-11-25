<?php
class BaseReport {
    public function title(): string { return 'Report'; }
}
class CustomReport extends BaseReport {
    public function title(): int { return 1; }
}
