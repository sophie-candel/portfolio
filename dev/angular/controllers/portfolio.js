app.controller("portfolio", [
  "$scope",
  function($scope) {
    $scope.oeuvres = [
      {
        titre: "Arts Martiaux Schweighouse",
        url: "",
        brief: "",
        img1: "/sources/img/ams.jpg"
      },
      {
        titre: "Vue du Coeur",
        url: "",
        brief: "",
        img1: "/sources/img/vdc.jpg"
      },
      {
        titre: "Techniques de Judo",
        url: "",
        brief: "",
        img1: "/sources/img/tdj.jpg"
      },
      {
        titre: "Agora",
        url: "",
        brief: "",
        img1: "/sources/img/agora.jpg"
      },
      {
        titre: "Les Seigneurs du Web",
        url: "",
        brief: "",
        img1: "/sources/img/sdw.jpg"
      },
      {
        titre: "Carnaval de Roppenheim",
        url: "",
        brief: "",
        img1: "/sources/img/carnaval.jpg"
      },
      {
        titre: "PicLab Colmar",
        brief: "",
        img1: "/sources/img/piclab.jpg"
      },
      {
        titre: "Festival du Houblon",
        url: "",
        brief: "",
        img1: "/sources/img/fdh.jpg"
      },
      {
        titre: "150 ans de la Halle aux Houblons",
        url: "",
        brief: "",
        img1: "/sources/img/150hh.jpg"
      }
    ];

    // $scope.selectedPortfolio = $scope.portfolio[0];

    $scope.showDetails = function(item) {
      // $scope.selectedItem = item;
      // var body = angular.element(document.querySelector("body"));
      // body.addClass("modal");
      // console.log(body);
    };

    $scope.closeModal = function() {
      console.log("close that shit !!");
      $scope.selectedItem = false;
    };
  }
]);
