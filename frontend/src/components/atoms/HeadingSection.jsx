import React from 'react'
import PropTypes from 'prop-types';

const HeadingSection = ({title}) => {
  return (
    <>
    <h2 style={{ fontSize: '2rem' }}>{">"} {title}</h2>
    </>
  );
}
HeadingSection.propTypes = {
    title: PropTypes.string.isRequired
  };
  
export default HeadingSection