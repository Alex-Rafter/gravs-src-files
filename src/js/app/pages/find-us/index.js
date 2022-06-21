import { getPageType } from "../../utils";
import { initLocationSearch, initPostcodeSearch, initQuickSearch } from "./search";

if (getPageType() === "Find Us") {
  initLocationSearch()
  initPostcodeSearch()
  initQuickSearch()
}
