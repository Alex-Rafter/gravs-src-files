/**
 * @name getPageType
 * @description returns the current page name/type
 * @returns { String } PageType
 */
export function getPageType() {
  return window.bsk?.pageType || null;
}
