<%@ Page Language="VB" AutoEventWireup="false" EnableEventValidation="false" CodeFile="~/COG/COGPageLoader/COGPageLoader.vb" Inherits="COGPageLoader" %>

<script runat="server">
  ReadOnly _cogCmsHomePage As CogCmsHomePageModel = CmsPagesService.GetHomePage()
  ReadOnly _cogCmsHomeBanners As List(Of CogCmsBanner) = CmsBannersService.GetBannersByFolderNodeId(237786)
  ReadOnly _cogCmsHomeLightboxBanners As List(Of CogCmsBanner) = CmsBannersService.GetBannersByFolderNodeId(237782)
</script>


<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head runat="server">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><%=_cogCmsHomePage.SeoInformation.MetaTitle %></title>
  <%= "<meta name=""description"" content=""" + _cogCmsHomePage.SeoInformation.MetaDescription + """ />" %>
  <meta name="author" content="Bluesky Interactive">
  <meta name="robots" content="index,follow,noodp,noydir">
  <meta charset="utf-8">
  <asp:PlaceHolder runat="server">

    <% If String.IsNullOrEmpty(_cogCmsHomePage.SeoInformation.CanonicalLink) Then %>
    <COG:SEOCanonical runat="server" />
    <% Else %>
    <% Response.Write("<link rel=""canonical"" href=""" + HttpContext.Current.Request.Url.Scheme + Uri.SchemeDelimiter + HttpContext.Current.Request.Url.Authority + _cogCmsHomePage.SeoInformation.CanonicalLink + """ />") %>
    <% End If %>

    <!--#include file="/inc/head/head.aspx" -->
  </asp:PlaceHolder>

  <script>
    window.dataLayer.push({
      'pageType': 'Home'
    });

    window.bsk = {
      pageType: 'Home'
    }
  </script>
  <script src="https://unpkg.com/petite-vue" defer init></script>
  <style>
    .main {
      display: flex;
      flex-direction: column;
      gap: 8.75rem;
    }
  </style>
</head>

<body class="page">
  <form id="form1" runat="server">
    <asp:scriptmanager id="ScriptManager1" runat="server"></asp:scriptmanager>

    <!--#include file="/inc/components/header.aspx" -->

    <main class="main overflow-hidden" id="main">

      <!--#include file="/inc/modules/home/home-hero-v3.aspx" -->
      <!--#include file="/inc/modules/home/chunky-spotlights.aspx" -->
      <!--#include file="/inc/modules/home/latest-stock.aspx" -->
      <!--#include file="/inc/modules/home/home-about.aspx" -->
      <!--#include file="/inc/modules/home/home-g-reviews.aspx" -->
      <!--#include file="/inc/modules/home/home-locations.aspx" -->
      <section class="py-5">
        <div class="container">
          <!--#include file="/inc/modules/search/speedy-search.aspx" -->
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="carousel carousel-dark card-carousel slick">
            <cog:cogdynamicrepeater_v1 id="Repeater_Carousel" runat="server" datatype="UsedCarData" carsperpage="8"
              template="/COGTemplates/Vehicles/FeaturedCars.ascx" orderby="DATEADDED" orderbydirection="DESC"
              ShowOnlyCarsWithImages="True" />
          </div>
        </div>
      </section>

      <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1><%=_cogCmsHomePage.Title%></h1>
              <% 
              If Not String.IsNullOrEmpty(_cogCmsHomePage.Grid) Then
                Response.Write(_cogCmsHomePage.Grid.Replace("data-toggle","data-bs-toggle").Replace("data-target","data-bs-target"))
              End If
              %>
            </div>
          </div>
        </div>

      </section>

      <section class="py-5">

        <div class="container">
          <!--#include file="/inc/modules/valuation/valuation.aspx" -->
        </div>

      </section>

    </main>

    <!--#include file="/inc/components/footer.aspx" -->

  </form>
  <!--#include file="/inc/js/js-foot.aspx" -->
  <script defer="defer" src="/js/search-counter.js"></script>

  <% If _cogCmsHomeLightboxBanners.Any() Then %>
  <div style="display: none;">
    <div id="blueskybox">
      <% For Each banner In _cogCmsHomeLightboxBanners.Take(1) %>
      <!--#include file="/COGTemplates/COGCMS/Banner_Lightbox.aspx" -->
      <% Next %>
    </div>
  </div>
  <% End If %>
  <script>
    $('.hamburger').click(() => $('.fat-nav').toggleClass('active'));

    function expanderFunc() {
        console.log('loaded')
        if (window.innerWidth < 1200) {
            const expands = Array.from(document.querySelectorAll('.expand'))
            expands.forEach((item) => {
                item.addEventListener('click', () => {
                    item.querySelector('.expand-content').classList.toggle('reveal');
                })
            });
        }
    }

    window.onload = () => expanderFunc();
    window.onresize = () => expanderFunc();
</script>
</body>

</html>