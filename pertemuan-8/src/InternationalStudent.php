<?php
declare(strict_types=1);
final class InternationalStudent extends Student {
    private const SURCHARGE_PERCENT = 50;
    public function getType(): string { return 'international'; }
    public function calculateFee(): float {
        return $this->baseFee * (1 + self::SURCHARGE_PERCENT / 100); // overriding abstract method
    }
    public function summary(): string { return parent::summary() . ' [Internasional]'; }
}
