/*
[{"id":1,"requestID":2,"requestDate":"2018-11-06 09:24:56","notes":"This is the justin second","status":4,"user_id":1,"time_completion":null,
"location":null,"accept_by":2,"serviceCode":"Justin the second","name":"justin"}]
		1- means -->pending 
		2.accepted
		3.Rejected
		4.completed
*/

function viewDetail(id) {
    $.ajax({
            method: "GET",
            url: "http://localhost/oldisgold/public/modal/" + id,
            data: {
                name: "John",
                location: "Boston"
            }
        })
        .done(function (data) {
            //change modal content firts
            var returnData = JSON.parse(data);
            var status = null;
            if (returnData[0]["status"] == 1) {
                status = "Pending";
            } else if (returnData[0]["status"] == 2) {
                status = "Accepted";
            } else if (returnData[0]["status"] == 3) {
                status = "Rejected";
            } else {
                status = "Completed";
            }
            //alert(returnData[0]["requestID"]);
            $("#m_type").html(returnData[0]["serviceCode"]);
            $("#m_note").html(returnData[0]["notes"]);
            $("#m_date").html(returnData[0]["requestDate"]);
            $("#m_location").html(returnData[0]["location"]);
            $("#m_time").html(returnData[0]["time_completion"]);
            $("#m_status").html(status);

            $('#viewRequest').modal('show');
        });

}

//for review modal
function showReviewModal(id) {
    //mReview
    $("#review_id").val(id);
    $.ajax({
            method: "GET",
            url: "http://localhost/oldisgold/public/reviewmodal/" + id,
            data: {}
        })
        .done(function (data) {
            // alert(data);
            var returnData = JSON.parse(data);
            $("#review_user").html(returnData[0]["name"]);
            $("#review_by").val(returnData[0]["accept_by"]);
            $("#m_type").html(returnData[0]["serviceCode"]);
            $('#mReview').modal('show');
        });
}

//accept request modal show 
function showAcceptRequest(id) {
    $.ajax({
            method: "GET",
            url: "http://localhost/oldisgold/public/modal/" + id,
            data: {
                name: "John",
                location: "Boston"
            }
        })
        .done(function (data) {
            //change modal content firts
            var returnData = JSON.parse(data);
            var status = null;
            if (returnData[0]["status"] == 1) {
                status = "Pending";
            } else if (returnData[0]["status"] == 2) {
                status = "Accepted";
            } else if (returnData[0]["status"] == 3) {
                status = "Rejected";
            } else {
                status = "Completed";
            }
            //alert(returnData[0]["requestID"]);
            $("#m_type").html(returnData[0]["serviceCode"]);
            $("#m_note").html(returnData[0]["notes"]);
            $("#m_date").html(returnData[0]["requestDate"]);
            $("#m_location").html(returnData[0]["location"]);
            $("#m_time").html(returnData[0]["time_completion"]);
            $("#m_status").html(status);
            $("#m_comp_date").html(returnData[0]["when_date"]);
            $("#m_comp_time").html(returnData[0]["time_completion"]);
            $('#acceptRequest').modal('show');
            $('#request_id').val(id);
        });

}

//show accepted request view 
function showAcceptRequestView(id) {
    $.ajax({
            method: "GET",
            url: "http://localhost/oldisgold/public/modal/" + id,
            data: {
            }
        })
        .done(function (data) {
            //change modal content firts
            var returnData = JSON.parse(data);
            var status = null;
            if (returnData[0]["status"] == 1) {
                status = "Pending";
            } else if (returnData[0]["status"] == 2) {
                status = "Accepted";
            } else if (returnData[0]["status"] == 3) {
                status = "Rejected";
            } else {
                status = "Completed";
            }
            //alert(returnData[0]["requestID"]);
            $("#m_type").html(returnData[0]["serviceCode"]);
            $("#m_note").html(returnData[0]["notes"]);
            $("#m_date").html(returnData[0]["requestDate"]);
            $("#m_location").html(returnData[0]["location"]);
            $("#m_time").html(returnData[0]["time_completion"]);
            $("#m_status").html(status);
            $("#m_comp_date").html(returnData[0]["when_date"]);
            $("#m_comp_time").html(returnData[0]["time_completion"]);
            $('#acceptRequest').modal('show');
            $('#request_id').val(id);
        });
}
