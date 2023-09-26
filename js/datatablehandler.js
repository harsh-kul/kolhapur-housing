class DataTableHandler {
  constructor(tableidname) {
    this.tableidname = tableidname;
  }

  inlizlaiseDataTable() {
    $("#" + this.tableidname + "").DataTable();
  }

  convertTableToReportTable() {
    $("#" + this.tableidname + "").DataTable({
      dom: "Bfrtip",

      buttons: [
        {
          extend: "excel",
          // text: 'exel',
          // exportOptions: {
          //   modifier: {
          //     page: 'current'
          //   }
          // }
        },
        {
          extend: "pdf",
          text: "<u>C</u>opy",
          key: {
            key: "c",
            altKey: true,
          },
        },
      ],
    });
  }

  CleanAndRefreshDataTable() {
    $("#" + this.tableidname + "").DataTable();
    var myt = $("#" + this.tableidname + "").dataTable();
    myt.fnClearTable();
    myt.fnDraw();
    this.RefreshDataTable(this.tableidname);
  }
  RefreshDataTable() {
    $("#" + this.tableidname + "")
      .dataTable()
      .fnDestroy();
    $("#" + this.tableidname + "").dataTable();
  }

  addRowInDataTable(row) {
    var t = $("#" + this.tableidname + "").DataTable();
    t.row.add(row).draw();
  }
}
