@section('script')
    <script type="text/javascript">

        var simplemde1 = new SimpleMDE({ element: $("#tekst")[0] 
            toolbar: [{
                name: "bold",
                action: SimpleMDE.toggleBold,
                className: "fa fa-bold",
                title: "Bold",
            },
            {
                name: "table",
                action: SimpleMDE.drawTable,
                className: "fa fa-table",
                title: "Insert Table",
            }
        ],
        });
    </script>
@endsection
