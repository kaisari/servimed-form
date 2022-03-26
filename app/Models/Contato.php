<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Contato
 *
 * @property int $id
 * @property int $cliente_id
 * @property string $nome
 * @property string|null $telefone
 * @property string|null $whatsapp
 * @property string $email
 * @property string $cargo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Contato newModelQuery()
 * @method static Builder|Contato newQuery()
 * @method static Builder|Contato query()
 * @method static Builder|Contato whereCargo($value)
 * @method static Builder|Contato whereClienteId($value)
 * @method static Builder|Contato whereCreatedAt($value)
 * @method static Builder|Contato whereEmail($value)
 * @method static Builder|Contato whereId($value)
 * @method static Builder|Contato whereNome($value)
 * @method static Builder|Contato whereTelefone($value)
 * @method static Builder|Contato whereUpdatedAt($value)
 * @method static Builder|Contato whereWhatsapp($value)
 * @mixin Eloquent
 */
class Contato extends Model
{
    protected $table = 'contatos';
    protected $fillable = ['cliente_id', 'nome', 'telefone', 'whatsapp', 'email', 'cargo'];
}
