<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Pending = 'pending';
    case Completed = 'completed';

    public function label(): string
    {
        return match($this) {
            self::Pending => 'Pendente',
            self::Completed => 'Concluída',
        };
    }

    public function color(): string
        {
            return match($this) {
                self::Pending => 'text-red-600',
                self::Completed => 'text-green-600',
            };

        }
}
