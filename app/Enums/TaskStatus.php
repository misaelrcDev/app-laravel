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

    public function titleStyle(): string
    {
        return match($this) {
            self::Completed => 'opacity-70 line-through',
            self::Pending => '',
        };
    }

    public function iconStatus(): string
    {
        return match($this) {
            self::Completed => '✅',
            self::Pending => '❌',
        };
    }

    public function buttonStyle(): string
    {
        return match($this) {
            self::Completed => 'bg-yellow-500 text-white',
            self::Pending => 'bg-green-600 text-white',
        };
    }

    public function buttonText(): string
    {
        return match($this) {
            self::Completed => 'Marcar como pendente',
            self::Pending => 'Concluir',
        };
    }
}
