@extends('layouts.admin')
@section('content')
@can('faq_question_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.faq-questions.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.faqQuestion.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.faqQuestion.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FaqQuestion">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.question') }}
                        </th>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.answer') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faqQuestions as $key => $faqQuestion)
                        <tr data-entry-id="{{ $faqQuestion->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $faqQuestion->id ?? '' }}
                            </td>
                            <td>
                                {{ $faqQuestion->category->category ?? '' }}
                            </td>
                            <td>
                                {{ $faqQuestion->question ?? '' }}
                            </td>
                            <td>
                                {{ $faqQuestion->answer ?? '' }}
                            </td>
                            <td>
                                @can('faq_question_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.faq-questions.show', $faqQuestion->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('faq_question_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.faq-questions.edit', $faqQuestion->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('faq_question_delete')
                                    <form action="{{ route('admin.faq-questions.destroy', $faqQuestion->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('faq_question_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.faq-questions.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-FaqQuestion:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection