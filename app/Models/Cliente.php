<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Cliente
 *
 * @property int $id
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property string $logradouro
 * @property string $bairro
 * @property string $cep
 * @property string $cidade
 * @property string $uf
 * @property string $telefone
 * @property string $email
 * @property string $email_nfe
 * @property string $email_boleto
 * @property string $email_cobranca
 * @property string $email_contato
 * @property string $email_compradores
 * @property string $ramo_atividade
 * @property string $ramo_atividade_desc
 * @property string $cnpj
 * @property string $ie
 * @property string $rede
 * @property string $grupo_economico
 * @property string $organizacao_vendas
 * @property string $organizacao_vendas_desc
 * @property string $filial_faturamento
 * @property string $motivo_bloqueio
 * @property string $descricao_bloqueio
 * @property string $setor_principal
 * @property string $setor_principal_desc
 * @property string $setor_secundario
 * @property string $setor_secundario_desc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Cliente newModelQuery()
 * @method static Builder|Cliente newQuery()
 * @method static Builder|Cliente query()
 * @method static Builder|Cliente whereBairro($value)
 * @method static Builder|Cliente whereCep($value)
 * @method static Builder|Cliente whereCidade($value)
 * @method static Builder|Cliente whereCnpj($value)
 * @method static Builder|Cliente whereCreatedAt($value)
 * @method static Builder|Cliente whereDescricaoBloqueio($value)
 * @method static Builder|Cliente whereEmail($value)
 * @method static Builder|Cliente whereEmailBoleto($value)
 * @method static Builder|Cliente whereEmailCobranca($value)
 * @method static Builder|Cliente whereEmailCompradores($value)
 * @method static Builder|Cliente whereEmailContato($value)
 * @method static Builder|Cliente whereEmailNfe($value)
 * @method static Builder|Cliente whereFilialFaturamento($value)
 * @method static Builder|Cliente whereGrupoEconomico($value)
 * @method static Builder|Cliente whereId($value)
 * @method static Builder|Cliente whereIe($value)
 * @method static Builder|Cliente whereLogradouro($value)
 * @method static Builder|Cliente whereMotivoBloqueio($value)
 * @method static Builder|Cliente whereNomeFantasia($value)
 * @method static Builder|Cliente whereOrganizacaoVendas($value)
 * @method static Builder|Cliente whereOrganizacaoVendasDesc($value)
 * @method static Builder|Cliente whereRamoAtividade($value)
 * @method static Builder|Cliente whereRamoAtividadeDesc($value)
 * @method static Builder|Cliente whereRazaoSocial($value)
 * @method static Builder|Cliente whereRede($value)
 * @method static Builder|Cliente whereSetorPrincipal($value)
 * @method static Builder|Cliente whereSetorPrincipalDesc($value)
 * @method static Builder|Cliente whereSetorSecundario($value)
 * @method static Builder|Cliente whereSetorSecundarioDesc($value)
 * @method static Builder|Cliente whereTelefone($value)
 * @method static Builder|Cliente whereUf($value)
 * @method static Builder|Cliente whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Cliente extends Model
{
    protected $table = 'clientes';
}
