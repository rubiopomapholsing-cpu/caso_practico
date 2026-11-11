@extends('layouts.app')

@section('title', 'Dashboard - SANTRIX')
@section('page-title', 'Dashboard del Sistema')

@section('content')
<div class="space-y-6">

    <!-- Tarjetas de Resumen / Estadísticas -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        
        <div class="stat-card">
            <span class="stat-label">Empresa</span>
            <p class="mt-2 text-base font-bold text-slate-800 truncate" title="EVALUACIÓN Y SUPERVISIÓN EN ENERGÍA E.I.R.L.">
                EVALUACIÓN Y SUPERVISIÓN
            </p>
        </div>

        <div class="stat-card">
            <span class="stat-label">RUC</span>
            <p class="mt-2 font-display text-2xl font-bold text-slate-900">
                20601266980
            </p>
        </div>

        <div class="stat-card">
            <span class="stat-label">Contrato</span>
            <p class="mt-2 font-display text-2xl font-bold text-slate-900">
                SUP2400158
            </p>
        </div>

        <div class="stat-card">
            <span class="stat-label">División</span>
            <p class="mt-2 font-display text-2xl font-bold text-slate-900">
                HUÁNUCO
            </p>
        </div>

    </div>

    <!-- Panel Principal con Información de Servicios -->
    <div class="card-panel">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6">
            <div>
                <span class="detail-label">Servicio Contratado</span>
                <h3 class="font-display text-lg font-bold text-slate-900 mt-1">
                    SUPERVISIÓN Y FISCALIZACIÓN DEL SUBSECTOR HIDROCARBUROS - HUÁNUCO
                </h3>
            </div>
            <div>
                <a href="{{ route('importaciones.create') }}" class="btn-primary">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Importar Excel
                </a>
            </div>
        </div>

        <!-- Tabla de Accesos / Módulos -->
        <div class="overflow-x-auto mt-6">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-xs font-semibold uppercase tracking-wider text-slate-400 bg-slate-50/50">
                        <th class="py-3 px-4">Módulo</th>
                        <th class="py-3 px-4">Descripción de Gestión</th>
                        <th class="py-3 px-4">Estado</th>
                        <th class="py-3 px-4 text-right">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    <tr class="hover:bg-slate-50/80 transition">
                        <td class="py-3.5 px-4 font-semibold text-slate-800">Configuración del Anexo</td>
                        <td class="py-3.5 px-4 text-slate-600">Gestión de parámetros iniciales y datos institucionales del anexo local.</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center rounded-full bg-emerald-50 px-2.5 py-0.5 text-xs font-medium text-emerald-700">Configurado</span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <a href="{{ route('anexos.index') }}" class="btn-table">Gestionar</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/80 transition">
                        <td class="py-3.5 px-4 font-semibold text-slate-800">Registros Anexo A</td>
                        <td class="py-3.5 px-4 text-slate-600">Visualización, filtrado y control de partidas de supervisión fiscalizadas.</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center rounded-full bg-cyan-50 px-2.5 py-0.5 text-xs font-medium text-cyan-700">Activo</span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <a href="{{ route('registros.index') }}" class="btn-table">Ver Registros</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
