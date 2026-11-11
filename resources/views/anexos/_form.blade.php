@php
    $editing = isset($anexo);
@endphp

<div class="space-y-6">
    <section class="card-panel">
        <div class="section-heading">
            <span class="section-number">01</span>
            <div>
                <h3 class="section-title">Identificación del anexo</h3>
                <p class="section-description">Define un título fácil de reconocer y asigna a la persona responsable.</p>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="form-label" for="titulo">Título del anexo</label>
                <input class="form-input" type="text" id="titulo" name="titulo" value="{{ old('titulo', $anexo->titulo ?? '') }}" required>
            </div>
            <div>
                <label class="form-label" for="responsable">Responsable</label>
                <input class="form-input" type="text" id="responsable" name="responsable" value="{{ old('responsable', $anexo->responsable ?? '') }}">
            </div>
        </div>
    </section>

    <section class="card-panel">
        <div class="section-heading">
            <span class="section-number">02</span>
            <div>
                <h3 class="section-title">Periodo y seguimiento</h3>
                <p class="section-description">Estas fechas y el estado se reflejan en la exportación Excel de este anexo.</p>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            <div class="md:col-span-2">
                <label class="form-label" for="periodo_ejecucion_contractual">{{ config('anexo.entregable_labels.periodo') }}</label>
                <input class="form-input" type="text" id="periodo_ejecucion_contractual" name="periodo_ejecucion_contractual" value="{{ old('periodo_ejecucion_contractual', $anexo->periodo_ejecucion_contractual ?? '') }}" placeholder="DESDE EL 18 DE NOVIEMBRE DE 2024 AL 17 DE DICIEMBRE DE 2024">
            </div>
            <div>
                <label class="form-label" for="fecha_contractual_ingreso_entregable">{{ config('anexo.entregable_labels.fecha_ingreso_entregable') }}</label>
                <input class="form-input" type="date" id="fecha_contractual_ingreso_entregable" name="fecha_contractual_ingreso_entregable" value="{{ old('fecha_contractual_ingreso_entregable', isset($anexo) && $anexo->fecha_contractual_ingreso_entregable ? $anexo->fecha_contractual_ingreso_entregable->format('Y-m-d') : '') }}">
            </div>
            <div>
                <label class="form-label" for="estado">Estado</label>
                <select class="form-input" id="estado" name="estado">
                    <option value="">Selecciona</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado }}" @selected(old('estado', $anexo->estado ?? '') === $estado)>{{ ucfirst($estado) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>

    <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
        <a href="{{ $editing ? route('anexos.show', $anexo) : route('anexos.index') }}" class="btn-secondary">Volver</a>
        <button type="submit" class="btn-primary">{{ $editing ? 'Actualizar anexo' : 'Guardar anexo' }}</button>
    </div>
</div>
