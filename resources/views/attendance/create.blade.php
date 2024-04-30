@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Attendance Registration') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('attendance.store') }}">
						@csrf

						<div class="form-group row">
							<label for="employee_id" class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

							<div class="col-md-6">
								<input id="employee_id" type="text" class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" value="{{ old('employee_id') }}" required autocomplete="employee_id" autofocus>

								@error('employee_id')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="clock_in" class="col-md-4 col-form-label text-md-right">{{ __('Clock In') }}</label>

							<div class="col-md-6">
								<input id="clock_in" type="time" class="form-control @error('clock_in') is-invalid @enderror" name="clock_in" value="{{ old('clock_in') }}" required>

								@error('clock_in')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="clock_out" class="col-md-4 col-form-label text-md-right">{{ __('Clock Out') }}</label>

							<div class="col-md-6">
								<input id="clock_out" type="time" class="form-control @error('clock_out') is-invalid @enderror" name="clock_out" value="{{ old('clock_out') }}">

								@error('clock_out')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="break_duration" class="col-md-4 col-form-label text-md-right">{{ __('Break Duration (minutes)') }}</label>

							<div class="col-md-6">
								<input id="break_duration" type="number" class="form-control @error('break_duration') is-invalid @enderror" name="break_duration" value="{{ old('break_duration') }}">

								@error('break_duration')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="condition" class="col-md-4 col-form-label text-md-right">{{ __('Condition') }}</label>

							<div class="col-md-6">
								<input id="condition" type="text" class="form-control @error('condition') is-invalid @enderror" name="condition" value="{{ old('condition') }}">

								@error('condition')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="fortune" class="col-md-4 col-form-label text-md-right">{{ __('Fortune') }}</label>

							<div class="col-md-6">
								<input id="fortune" type="text" class="form-control @error('fortune') is-invalid @enderror" name="fortune" value="{{ old('fortune') }}">

								@error('fortune')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register Attendance') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection